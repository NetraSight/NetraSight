<?php

namespace App\Http\Controllers;

use App\Services\OllamaService;
use Illuminate\Http\Request;

class OllamaController extends Controller
{
    protected $ollamaService;

    public function __construct(OllamaService $ollamaService)
    {
        $this->ollamaService = $ollamaService;
    }

    public function handleQuery(Request $request)
    {
        $query = $request->input('query');
        $response = $this->ollamaService->askQuestion($query);
        return response()->json($response);
    }
    public function testUi(Request $request)
    {
        $query = $request->input('query');
        $response = $this->ollamaService->askQuestion($query);

        return view('test-ui')->with('response', $response);
    }
}
