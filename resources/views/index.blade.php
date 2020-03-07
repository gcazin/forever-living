@extends('layouts.app')


@section('content')
    <div class="first__section">

        <p class="text-4xl text-center text-gray-700">{{ __('home.text') }}</p>
        <!-- Card container -->
        <div id="card-container" class="flex flex-col lg:flex-row items-center">
            <v-card title="{{ __('home.first_card') }}"
                    link="{{ route('show.formation', 1) }}" button="{{ __('card.formation') }}"></v-card>
            <v-card title="{{ __('home.second_card') }}"
                    link="{{ route('login.passcode') }}" button="{{ __('card.formation') }}"></v-card>
            <v-card title="{{ __('home.third_card') }}"
                    link="{{ route('show.formation', 2) }}" button="{{ __('card.formation') }}"></v-card>
        </div>

    </div>

@endsection
