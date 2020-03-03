@extends('layouts.app')

@section('content')
    <div class="container-full">
        <div class="text-center">
            <h1 class="text-2xl text-gray-700"><i class="far fa-envelope"></i> Votre demande de mot de passe à bien été prise en compte</h1>
            <div class="mt-5 mb-1">
                <a class="btn btn-light" href="{{ route('home') }}">Retour à la page d'accueil</a>
            </div>
        </div>
    </div>
@endsection
