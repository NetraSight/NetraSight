<?php

namespace App\Actions\Ollama;

use Lorisleiva\Actions\Concerns\AsAction;

class RunSqlInDatabase
{
    use AsAction;

    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = config('services.ollama.url');
    }

    public function handle($prompt)
    {
    }
}
