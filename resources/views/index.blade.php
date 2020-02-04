@extends('layouts.app')

@section('full', true)

@section('content')
    <div class="first__section">
        <div class="pb-10 flex justify-center items-center w-10/12 mx-auto">
            <div class="first__section-text flex-1">
                <h1 class="text-4xl text-gray-800">Titre principal de la section</h1>
                <p class="text-gray-700 py-4 pr-20">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                <a href="#" class="btn btn-primary btn-lg">Découvrir le site</a>
            </div>
            <div class="flex-1">
                <img src="{{ asset('storage/images/accueil.svg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="py-10 bg-white">
        <div class="mx-auto">

            <div class="text-center">
                <h1 class="text-4xl text-gray-700 pb-10">Découvrir la gamme de produits</h1>
            </div>
            <!-- Card container -->
            <div id="card-container">
                <card background="bg-gray-100" title="Santé & bien-être" button="{{ __('card.formation') }}"></card>
                <card title="Santé & bien-être" button="{{ __('card.formation') }}"></card>
                <card title="Santé & bien-être" button="{{ __('card.formation') }}"></card>
            </div>

        </div>
    </div>
@endsection
