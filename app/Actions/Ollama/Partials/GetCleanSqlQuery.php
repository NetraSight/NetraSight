<?php

namespace App\Actions\Ollama\Partials;

use Lorisleiva\Actions\Concerns\AsAction;

class GetCleanSqlQuery
{
    use AsAction;

    public function handle($responseBody)
    {
        $responseLines = explode("\n", $responseBody);
        $finalResponse = '';

        foreach ($responseLines as $line) {
            if (empty(trim($line))) {
                continue; // Skip empty lines
            }

            $decoded = json_decode($line, true);

            if (json_last_error() === JSON_ERROR_NONE && isset($decoded['response'])) {
                $finalResponse .= $decoded['response'];
            }
        }

        // Trim any extra spaces or unwanted characters from the query
        return trim($finalResponse);
    }
}
