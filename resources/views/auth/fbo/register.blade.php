@extends('layouts.app')

@section('content')
    <form action="{{ route('send.register.fbo') }}" method="post">
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
                    <v-input label="{{ __('auth/form.fbo_number') }}" name="fbo_number" placeholder="FBO000000"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="{{ __('auth/form.first_name') }}" name="last_name" placeholder="Dupont"></v-input>
                    <v-input label="{{ __('auth/form.last_name') }}" name="first_name" placeholder="Jean"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="{{ __('auth/form.tel') }}" name="tel" placeholder="0102030405"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="{{ __('auth/form.email') }}" name="email" placeholder="email@contact.com"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="{{ __('auth/form.postal_code') }}" name="city_code" placeholder="10000"></v-input>
                    <v-input label="{{ __('auth/form.city') }}" name="city" placeholder="Somme"></v-input>
                </div>

            </div>

            <h1 class="text-gray-600 text-xl">Informations Upline</h1>
            <div class="container-full mb-3">
                <div class="form-group">
                    <v-input label="{{ __('auth/form.referrer') }}" name="tel" placeholder="{{ __('auth/form.fbo_number') }}"></v-input>
                    <v-input label="{{ __('auth/form.referrer_tel') }}" name="tel" placeholder="{{ __('auth/form.referrer_tel') }}"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="{{ __('auth/form.manager') }}" name="tel" placeholder="{{ __('auth/form.manager') }}"></v-input>
                    <v-input label="{{ __('auth/form.manager_tel') }}" name="tel" placeholder="{{ __('auth/form.manager_tel') }}"></v-input>
                </div>
                <button class="btn btn-blue btn-block mb-4" type="submit">{{ __('auth/form.submit') }}</button>
            </div>

        </div>
    </form>
@endsection
