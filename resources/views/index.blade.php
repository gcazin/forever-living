@extends('layouts.app')


@section('content')
    <div class="first__section">
    <!--<div class="pb-10 flex justify-center items-center w-10/12 mx-auto">
            <div class="first__section-text flex-1">
                <h1 class="text-4xl text-gray-800">Titre principal de la section</h1>
                <p class="text-gray-700 py-4 pr-20">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                <a href="#" class="btn btn-primary btn-lg">Découvrir le site</a>
            </div>
            <div class="flex-1">
                <img src="{{ asset('storage/images/accueil.svg') }}" alt="">
            </div>
        </div>-->

        <p class="py-10 text-2xl text-center text-gray-700">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet</p>
        <!-- Card container -->
        <div id="card-container" class="flex items-center">
            <v-card title="Améliorer votre santé et votre bien-être" link="{{ route('home') }}" button="{{ __('card.formation') }}"></v-card>
            <v-card title="Augmenter vos revenus" button="{{ __('card.formation') }}"></v-card>
            <v-card title="Faire des économies sur vos dépenses quotidiennes" button="{{ __('card.formation') }}"></v-card>
        </div>
    </div>
@endsection
