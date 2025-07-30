@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6">
    <form method="POST" action="{{ route('ai.generate') }}">
        @csrf
        <label for="prompt">Enter your blog prompt:</label>
        <input type="text" name="prompt" id="prompt" class="border w-full p-2" value="{{ old('prompt') }}" required>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 mt-2">Generate</button>
    </form>

    @error('error')
        <div class="text-red-600 mt-4">{{ $message }}</div>
    @enderror

    @if(session('output'))
        <div class="mt-4 border p-4 bg-white">
            <h2 class="font-semibold">AI Response:</h2>
            <pre class="whitespace-pre-wrap">{{ session('output') }}</pre>
        </div>
    @endif
</div>
@endsection