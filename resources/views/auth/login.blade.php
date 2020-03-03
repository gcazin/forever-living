@extends('layouts.app')

@section('full', false)

@section('content')
    <div class="container-full max-w-lg mx-auto">
        <form class="bg-white rounded mb-1" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <v-input label="Numéro FBO" name="fbo_number" placeholder="Numéro FBO"></v-input>
            </div>

            <div class="form-group">
                <v-input type="password" label="Mot de passe" name="password" placeholder="Mot de passe"></v-input>
            </div>

            @error('passcode')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
            <div class="form-group" style="margin-left: 0 !important;">
                <input class="form-check-input mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Se souvenir de moi') }}
                </label>
            </div>
            <div class="flex items-center justify-between">
                <button class="btn btn-blue" type="button">
                    Se connecter
                </button>
            </div>
        </form>
    </div>
    </form>
@endsection
