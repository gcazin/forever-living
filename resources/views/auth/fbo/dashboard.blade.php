@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-gray-800">Bienvenue dans votre espace formation</h1>

    <div class="flex my-6">

        <div class="w-1/3 flex flex-col rounded-lg shadow bg-white px-2 pt-5 relative hover:shadow-lg" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl text-gray-600">Formation en produits disponible</h1>
            </div>
            <div class="flex-1 flex self-center py-5">
                <span class="text-3xl text-blue-600 font-bold">
                    {{ count(\App\Formation::all()->where('category_id', 1)) }}
                </span>
            </div>
            <a href="{{ route('list.formations.fbo', 1) }}" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

        <div class="w-1/3 rounded-lg shadow bg-white px-2 py-4 mx-10">
            <a class="text-xl text-orange-600" href="">Produits</a>
        </div>

        <div class="w-1/3 flex flex-col rounded-lg shadow bg-white px-2 pt-5 relative hover:shadow-lg" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl text-gray-600">Formation en business disponible</h1>
            </div>
            <div class="flex-1 flex self-center py-5">
                <span class="text-3xl text-purple-600 font-bold">
                    {{ count(\App\Formation::all()->where('category_id', 2)) }}
                </span>
            </div>
            <a href="{{ route('list.formations.fbo', 2) }}" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>
    </div>

    <div class="mt-2 text-right">
        <a class="btn btn-red" href="{{ route('logout') }}">Déconnexion</a>
    </div>
@endsection
