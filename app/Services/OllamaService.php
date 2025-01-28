<?php

namespace App\Services;

use App\Actions\Ollama\GenerateSqlQuery;

class OllamaService
{
    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = config('services.ollama.url'); // Ensure this is set in config/services.php
    }

    public function askQuestion($query)
    {
        return GenerateSqlQuery::run($query);
    }
}
