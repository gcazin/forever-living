@extends('layouts.app')

@section('full', false)

@section('content')
    <div class="max-w-lg mx-auto">
        <h1 class="text-xl text-gray-800">Connexion au tableau de bord</h1>
        <div class="container-full">
            <form method="POST" action="{{ route('login.fbo') }}">
                @csrf
                <div class="form-group" id="form-group">
                    <label for="fbo_number">Numéro FBO</label>
                    <input class="@error('fbo_number') is-invalid @enderror" type="text" name="fbo_number" placeholder="Numéro FBO">
                </div>

                @error('fbo_number')
                <span class="error-message">
                        {{ $errors->first('fbo_number') }}
                    </span>
                @enderror

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input class="@error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Mot de passe">
                </div>

                @error('password')
                <span class="error-message">
                        {{ $errors->first('password') }}
                    </span>
                @enderror

                <div class="form-group-checkbox mb-3" style="margin-left: 0 !important;">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Se souvenir de moi') }}
                    </label>
                </div>

                <button class="btn btn-blue btn-block" type="submit">
                    {{ __('auth/form.submit') }}
                </button>
            </form>

            <div class="form-group mt-3">
                <a href="{{ route('showForm.register.fbo') }}" class="mt-4 text-blue-500">Vous n'avez pas de mot de passe?</a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let formGroup = document.getElementById('form-group');
        let errorMessage = formGroup.nextElementSibling;
        let input = formGroup.getElementsByTagName('input')

        console.log(errorMessage)

        if (errorMessage.length > 0) {
            /*for(let i = 0; i < formGroup.length; i++) {
                input.push(formGroup[i].getElementsByTagName('input'))
                span.push(formGroup[i].nextElementSibling);
            }*/
            for (let i = 0; i < input.length; i++) {
                input[j].addEventListener('click', bindClick(i))
            }
        }

        function bindClick(i) {
            return function() {
                console.log("you clicked region number " + i);
            };
        }
    </script>
@endsection
