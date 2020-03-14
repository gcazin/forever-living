@extends('layouts.app')

@section('content')
    <div class="w-full h-full sm:p-0 md:p-10 xl:p-10 relative">
        <div class="flex flex-col w-8/12 mx-auto">
            <div class="rounded-l">
                <img class="rounded-lg shadow"src="{{ $content->link }}">
            </div>
            <div class="p-5 text-gray-600 mt-3 bg-white shadow rounded">
                <a href="{{ route('contact.home_content') }}" class="btn btn-blue btn-block">En savoir plus</a>
            </div>
        </div>
    </div>
@endsection
