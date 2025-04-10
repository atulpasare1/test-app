<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenAIService;
class OpenAIController extends Controller
{
    protected $openAIService;
    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }
    public function generate(Request $request)
    {
      
        $text = $this->openAIService->callGroqApi();
        return response()->json(['generated_text' => $text]);
    }
}
