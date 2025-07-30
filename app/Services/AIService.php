<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AIService
{
    public function generateText(string $prompt): string
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.openai.key'),
            'Content-Type' => 'application/json',
        ])->post(config('services.openai.url') . '/chat/completions', [
            'model' => config('services.openai.model'),
            'messages' => [
                ['role' => 'system', 'content' => 'You are a professional writing simple multi-paragraph blog posts.'],
                ['role' => 'user', 'content' => "Write a detailed blog post with the title: {$prompt}."]
            ],
            'temperature' => 0.7,
            'max_tokens' => 500,
        ]);

        if (!$response->successful()) {
            throw new \Exception('API error: ' . $response->body());
        }

        return $response['choices'][0]['message']['content'] ?? 'No output received';
    }
}