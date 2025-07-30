<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AIService;

class AIController extends Controller
{
    public function showForm()
    {
        return view('ai_form');
    }

    public function generate(Request $request, AIService $aiService)
    {
    $request->validate([
        'prompt' => 'required|string|min:5|max:255'
    ]);

    try {
        $output = $aiService->generateText($request->input('prompt'));

        // Redirect back to the form with the output stored in the session
        return redirect()
            ->route('ai.form')
            ->with('output', $output)
            ->withInput();
    } catch (\Exception $e) {
        return redirect()
            ->route('ai.form')
            ->withErrors(['error' => 'AI request failed: ' . $e->getMessage()])
            ->withInput();
    }
    }
}