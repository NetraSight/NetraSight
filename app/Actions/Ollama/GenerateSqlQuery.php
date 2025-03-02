<?php

namespace App\Actions\Ollama;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Actions\Database\GetDatabaseSchema;
use App\Actions\Ollama\Partials\GetCleanSqlQuery;
use App\Actions\Ollama\Representation\GenerateUIFromData;

class GenerateSqlQuery
{
    use AsAction;

    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = config('services.ollama.url');
    }

    public function handle($query)
    {
        ini_set('max_execution_time', 10000);
        try {
            $schema = GetDatabaseSchema::run();

            $prompt = "Based on the following database schema, generate an SQL query for the user's request:\n\n";
            $prompt .= "Database Schema:\n" . json_encode($schema, JSON_PRETTY_PRINT) . "\n\n";
            $prompt .= "Generate only the SQL query for the following request, without any explanation or extra text: " . $query;

            $response = Http::post($this->apiUrl, [
                'model' => 'llama3.2',
                'prompt' => $prompt,
                'stream' => false,
            ]);

            if (!$response->successful()) {
                Log::error('Ollama API Error', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return [
                    'error' => $response->status(),
                    'message' => 'Failed to retrieve data from Ollama',
                ];
            }

            // Get full JSON response
            $responseBody = $response->json();

            if (!isset($responseBody['sql_query']) || empty($responseBody['sql_query'])) {
                Log::error('Generated SQL Query is empty or missing');
                return [
                    'error' => 400,
                    'message' => 'Generated SQL Query is empty',
                ];
            }

            $cleanSqlQuery = GetCleanSqlQuery::run($responseBody['sql_query']);

            // TODO: add support for multiple queries
            // $responseBody = '';
            // $stream = $response->toPsrResponse()->getBody();

            // while (!$stream->eof()) {
            //     $responseBody .= $stream->read(1024);
            // }

            // $cleanSqlQuery = GetCleanSqlQuery::run($responseBody);

            if (empty($cleanSqlQuery)) {
                Log::error('Generated SQL Query is empty');
                return [
                    'error' => 400,
                    'message' => 'Generated SQL Query is empty',
                ];
            }

            $data = DB::select($cleanSqlQuery);

            return [
                'success' => true,
                'sql_query' => $cleanSqlQuery,
                'data' => $data,
                // 'html' => GenerateUIFromData::run($data),
            ];
        } catch (\Exception $e) {
            return [
                'error' => 500,
                'message' => 'An error occurred: ' . $e->getMessage(),
            ];
        }
    }
}
