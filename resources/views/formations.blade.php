@extends('layouts.app')

@section('content')
    <div class="w-full h-full sm:p-0 md:p-10 xl:p-10 relative">
        <div class="absolute bg-blue-100 text-gray-700 border border-blue-200 rounded-full px-6 py-4" style="top: 50%; left: 10px; transform: translateY(-50%)"><i class="fas fa-chevron-left"></i></div>

        <div class="flex flex-col w-8/12 mx-auto">
            <div class="rounded-l">
                <img class="rounded-lg shadow"src="https://images.unsplash.com/photo-1495020689067-958852a7765e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3300&q=80">
            </div>
            <div class="p-5 text-gray-600 mt-3 bg-white shadow rounded">
                <a href="#" class="btn btn-primary btn-block btn-lg">En savoir plus</a>
            </div>
        </div>

        <div class="absolute bg-blue-100 text-gray-700 border border-blue-200 text-gray-800 rounded-full px-6 py-4" style="top: 50%; right: 10px; transform: translateY(-50%)"><i class="fas fa-chevron-right"></i></div>
    </div>
@endsection
