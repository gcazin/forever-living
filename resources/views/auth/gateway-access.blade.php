@extends('layouts.app')

@section('content')
    @php
        $previous_url = explode('/', request()->session()->previousUrl());
    @endphp
    <div class="w-8/12 mx-auto">
        <h1 class="text-2xl text-gray-700">Vous devez être connecté pour accéder à cette ressource</h1>
        <hr class="border-gray-400 mt-2">
        <div class="flex mx-auto my-6">

            <div class="w-1/2 mr-5 text-center rounded-lg bg-white px-2 py-5 relative bg-yellow-400 hover:shadow" style="transition: 0.2s">
                <h1 class="text-2xl text-gray-700">J'ai un passcode</h1>
                <a href="{{ route('login.passcode') }}?id={{ end($previous_url) }}" class="absolute top-0 bottom-0 left-0 right-0"></a>
            </div>

            <div class="w-1/2 mr-5 text-center rounded-lg border border-yellow-400 bg-white px-2 py-5 relative hover:shadow" style="transition: 0.2s">
                <h1 class="text-2xl text-gray-600">Je suis membre FBO</h1>
                <a href="{{ route('login.fbo') }}" class="absolute top-0 bottom-0 left-0 right-0"></a>
            </div>

        </div>
    </div>
@endsection
