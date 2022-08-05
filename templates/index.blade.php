@extends('layouts.app')

@section('content')
    <div class="flex items-center h-screen bg-bodyBg">
        <div class="max-w-5xl m-auto bg-white rounded-lg w-3/4 h-64 flex items-center shadow-xl" x-data="{ showPhrase: true }">
            <h1 class="w-full text-center text-2xl md:text-4xl font-serif" @mouseover="showPhrase = false"
                @mouseout="showPhrase = true"
                x-text="showPhrase ? 'Build Something Awesome...' : '...With tailwind, alpine and wordpress'">
            </h1>
        </div>
    </div>
@endsection
