@extends('layouts.app')


@section('content')
    <div class="first__section">

        <p class="text-4xl text-center text-gray-700">{{ __('home.text') }}</p>
        <!-- Card container -->
        <div id="card-container" class="flex flex-col lg:flex-row items-center">

            <!-- Première carte -->
            <div class="card slideUp">
                <div class="card-content">
                    <div style="z-index: 999" class="card-content__title">
                        <span class="text-2xl mx-5 h-20 text-gray-700">{{ __('home.first_card') }}</span>
                    </div>
                    <div style="z-index: 999" class="card-content__body">
                        <a class="btn" href="{{ route('show.home_content', 1) }}">{{ __('card.formation') }}</a>
                    </div>
                </div>
            </div>

            <!-- Deuxième carte -->
            <div class="card slideUp">
                <div class="card-content">
                    <div style="z-index: 999" class="card-content__title">
                        <span class="text-2xl mx-5 h-20 text-gray-700">{{ __('home.second_card') }}</span>
                    </div>
                    <div style="z-index: 999" class="card-content__body">
                        <a class="btn" href="{{ route('question.home_content') }}">{{ __('card.formation') }}</a>
                    </div>
                </div>
            </div>

            <!-- Troisième carte -->
            <div class="card slideUp">
                <div class="card-content">
                    <div style="z-index: 999" class="card-content__title">
                        <span class="text-2xl mx-5 h-20 text-gray-700">{{ __('home.third_card') }}</span>
                    </div>
                    <div style="z-index: 999" class="card-content__body">
                        <a class="btn" href="{{ route('show.home_content', 2) }}">{{ __('card.formation') }}</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
