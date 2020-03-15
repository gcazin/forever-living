@extends('layouts.app')

@section('content')
    <form action="{{ route('showForm.register.fbo') }}" method="post">
        <div class="w-full lg:w-8/12 mx-auto">
            <h1 class="text-xl lg:text-3xl text-gray-700 mb-3">{{ __('auth/form.request_password') }}</h1>
            @csrf

            @if ($errors->any())
                <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-4 mb-5 flex flex-col my-2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <h1 class="text-gray-600 text-xl">Informations FBO</h1>
            <div class="container-full mb-3">
                <div class="form-group">
                    <label for="fbo_number">{{ __('auth/form.fbo_number') }}</label>
                    <input id="fbo_number" name="fbo_number" placeholder="FBO000000">
                </div>
                <div class="form-group flex">
                    <div class="w-1/2">
                        <label for="last_name">{{ __('auth/form.last_name') }}</label>
                        <input id="last_name" name="last_name" placeholder="Dupont">
                    </div>

                    <div class="w-1/2 ml-4">
                        <label for="first_name">{{ __('auth/form.first_name') }}</label>
                        <input id="first_name" name="first_name" placeholder="Jean">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tel">{{ __('auth/form.tel') }}</label>
                    <input id="tel" name="tel" placeholder="0102030405">
                </div>
                <div class="form-group">
                    <label for="email">{{ __('auth/form.email') }}</label>
                    <input id="email" name="email" placeholder="email@contact.com">
                </div>
                <div class="form-group flex">
                    <div class="w-1/2">
                        <label for="city_code">{{ __('auth/form.postal_code') }}</label>
                        <input id="city_code" name="city_code" placeholder="10000">
                    </div>

                    <div class="w-1/2 ml-4">
                        <label for="city">{{ __('auth/form.city') }}</label>
                        <input id="city" name="city" placeholder="Somme">
                    </div>
                </div>

            </div>

            <h1 class="text-gray-600 text-xl">Informations Upline</h1>
            <div class="container-full mb-3">
                <div class="form-group flex">

                    <div class="w-1/2">
                        <label for="fbo_number_referrer">{{ __('auth/form.referrer') }}</label>
                        <input id="fbo_number_referrer" name="fbo_number_referrer" placeholder="{{ __('auth/form.fbo_number') }}">
                    </div>

                    <div class="w-1/2 ml-4">
                        <label for="tel_referrer">{{ __('auth/form.referrer_tel') }}</label>
                        <input id="tel_referrer" name="tel_referrer" placeholder="{{ __('auth/form.referrer_tel') }}">
                    </div>
                </div>
                <div class="form-group flex">
                    <div class="w-1/2">
                        <label for="tel_manager">{{ __('auth/form.manager') }}</label>
                        <input id="tel_manager" name="tel_manager" placeholder="{{ __('auth/form.manager') }}">
                    </div>

                    <div class="w-1/2 ml-4">
                        <label for="tel_manager">{{ __('auth/form.manager_tel') }}</label>
                        <input id="tel_manager" name="tel_manager" placeholder="{{ __('auth/form.manager_tel') }}">
                    </div>
                </div>
                <button class="btn btn-blue btn-block mb-4" type="submit">{{ __('auth/form.submit') }}</button>
            </div>

        </div>
    </form>
@endsection
