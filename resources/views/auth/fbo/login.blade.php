@extends('layouts.app')

@section('full', false)

@section('content')
    <div class="max-w-lg mx-auto">
        <h1 class="text-xl text-gray-800">Connexion au tableau de bord</h1>
        <div class="container-full">
            <form method="POST" action="{{ route('login.fbo') }}">
                @csrf
                <div class="form-group">
                    <v-input label="{{ __('auth/form.fbo_number') }}" name="fbo_number" placeholder="Numéro FBO"></v-input>
                </div>

                <div class="form-group">
                    <v-input type="password" label="{{ __('auth/form.password') }}" name="password" placeholder="Mot de passe"></v-input>
                </div>

                <div class="mb-3" style="margin-left: 0 !important;">
                    <input class="form-check-input mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Se souvenir de moi') }}
                    </label>
                </div>

                <button class="btn btn-blue btn-block" type="submit">
                    {{ __('auth/form.submit') }}
                </button>
            </form>

            <div class="form-group " style="margin-left: 0 !important;" >
                <a href="{{ route('showForm.register.fbo') }}" class="mt-4 text-blue-500">Vous n'avez pas de mot de passe?</a>
            </div>
        </div>
    </div>
@endsection
