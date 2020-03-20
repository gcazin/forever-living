@extends('layouts.app')

@section('content')
    <div class="container-full w-8/12 mx-auto">

        <form action="{{ route('contact.home_content') }}" method="post">

            <div class="form-group flex">
                <div class="w-1/2">
                    <label for="last_name">{{ __('auth/form.last_name') }}</label>
                    <input name="last_name" id="first_name" placeholder="{{ __('auth/form.last_name') }}">
                </div>
                <div class="w-1/2 ml-4">
                    <label for="first_name">{{ __('auth/form.first_name') }}</label>
                    <input name="first_name" id="first_name" placeholder="{{ __('auth/form.first_name') }}">
                </div>
            </div>

            <div class="form-group">
                <label for="tel">{{ __('auth/form.tel') }}</label>
                <input name="tel" id="tel" placeholder="{{ __('auth/form.tel') }}">
            </div>

            <div class="form-group">
                <label for="email">{{ __('auth/form.email') }}</label>
                <input name="email" id="email" placeholder="{{ __('auth/form.email') }}">
            </div>

            <div class="form-group">
                <label for="street">{{ __('auth/form.street') }}</label>
                <input name="street" id="street" placeholder="{{ __('auth/form.street') }}">
            </div>

            <div class="form-group flex">
                <div class="w-1/2">
                    <label for="city">{{ __('auth/form.city') }}</label>
                    <input name="city" id="city" placeholder="{{ __('auth/form.city') }}">
                </div>
                <div class="w-1/2 ml-4">
                    <label for="postal_code">{{ __('auth/form.postal_code') }}</label>
                    <input name="postal_code" id="postal_code" placeholder="{{ __('auth/form.postal_code') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                    {{ __('auth/form.message') }}
                </label>
                <textarea id="message" class="form-control" name="message" placeholder="{{ __('auth/form.message') }}"></textarea>
            </div>

            <div class="text-right">
                <button class="btn btn-blue" type="submit">Envoyer</button>
            </div>
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
