<?php

namespace App\Actions\Ollama\Representation;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GenerateUIFromData
{
    use AsAction;

    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = config('services.ollama.url');
    }

    public function handle($data)
    {
        try {
            // Step 1: Pass the data to Ollama to generate HTML representation of the UI
            $response = Http::timeout(60) // Set timeout to 60 seconds
                ->post($this->apiUrl, [
                    'model' => 'llama3.2',
                    'prompt' => "Generate HTML code for the following UI data, without any explanation or extra text:\n\n" . "Data: " . json_encode($data),
                ]);

            // Check if the response was successful
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

            $htmlContent = '';
            $stream = $response->toPsrResponse()->getBody();

            while (!$stream->eof()) {
                $chunk = $stream->read(1024); // Read the chunk
                Log::info('Raw Chunk', ['chunk' => $chunk]); // Log the raw chunk

                // Attempt to decode the JSON chunk
                $decodedChunk = json_decode($chunk, true);
                Log::info('Decoded Chunk', ['decoded' => $decodedChunk]); // Log the decoded chunk

                if (isset($decodedChunk['response'])) {
                    $htmlContent .= $decodedChunk['response'];
                }
            }


            Log::info('Ollama API Response HTML', [
                'status' => $response->status(),
                'htmlContent' => $htmlContent,
            ]);

            // Step 3: Clean the HTML content (if needed)
            $cleanHtml = $this->getCleanHtml($htmlContent);

            // Return the final HTML
            return [
                'success' => true,
                'html' => $cleanHtml,
            ];
        } catch (\Exception $e) {
            Log::error('Ollama Service Error', ['message' => $e->getMessage()]);

            return [
                'error' => 500,
                'message' => 'An error occurred: ' . $e->getMessage(),
            ];
        }
    }




    // Method to clean and extract HTML from the response (ignore explanation text)
    private function getCleanHtml($responseBody)
    {
        // Extract HTML content enclosed within <html> ... </html>
        if (preg_match('/<html.*?>.*?<\/html>/s', $responseBody, $matches)) {
            return $matches[0]; // Return the first match (HTML content)
        }

        return trim($responseBody); // Return as-is if no <html> tags found
    }

}
