@extends('layouts.app')

@section('content')
    <div class="container-full">

        <form action="{{ route('contact.formations') }}" method="post">

            <div class="form-group">
                <v-input name="last_name" label="{{ __('auth/form.last_name') }}" placeholder="{{ __('auth/form.last_name') }}"></v-input>
                <v-input name="first_name" label="{{ __('auth/form.first_name') }}" placeholder="{{ __('auth/form.first_name') }}"></v-input>
            </div>

            <div class="form-group">
                <v-input name="last_name" label="{{ __('auth/form.tel') }}" placeholder="{{ __('auth/form.tel') }}"></v-input>
            </div>

            <div class="form-group">
                <v-input name="first_name" label="{{ __('auth/form.email') }}" placeholder="{{ __('auth/form.email') }}"></v-input>
            </div>

            <div class="form-group">
                <v-input name="first_name" label="{{ __('auth/form.street') }}" placeholder="{{ __('auth/form.street') }}"></v-input>
            </div>

            <div class="form-group">
                <v-input name="first_name" label="{{ __('auth/form.city') }}" placeholder="{{ __('auth/form.city') }}"></v-input>
                <v-input name="first_name" label="{{ __('auth/form.postal_code') }}" placeholder="{{ __('auth/form.postal_code') }}"></v-input>
            </div>

            <div class="div-group">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                    {{ __('auth/form.message') }}
                </label>
                <textarea id="message" class="form-control" name="message" placeholder="{{ __('auth/form.message') }}"></textarea>
            </div>

            <button class="btn btn-submit" type="submit">Envoyer</button>
        </form>

    </div>
@endsection

@section('script')
    <script src="https://www.google.com/recaptcha/api.js?render=6LcCG98UAAAAAIWO-1fg3Ga7yCZkb6tRDKzCdEFH"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {
                return true;
            });
        });
    </script>
@endsection
