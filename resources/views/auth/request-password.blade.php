@extends('layouts.app')

@section('content')
    <form action="{{ route('getPassword') }}" method="post">
        <div class="w-8/12 mx-auto">
            <h1 class="text-3xl text-gray-700 mb-3">Formulaire de demande de mot de passe</h1>
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

            <div class="bg-white shadow-md rounded-lg px-4 pt-4 mb-5 flex flex-col">
                <div class="form-group">
                    <v-input label="Numéro FBO" name="fbo_number" placeholder="Numéro FBO"></v-input>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg px-4 pt-4 mb-4 flex flex-col">
                <div class="form-group">
                    <v-input label="Nom" name="last_name" placeholder="Nom"></v-input>
                    <v-input label="Prénom" name="first_name" placeholder="Prénom"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="Numéro de téléphone" name="tel" placeholder="Numéro de téléphone"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="Adresse email" name="email" placeholder="Adresse email"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="Code postal" name="city_code" placeholder="Code postal"></v-input>
                    <v-input label="Ville" name="city" placeholder="Ville"></v-input>
                </div>

                <button class="btn btn-blue btn-block mb-4" type="submit">Valider</button>
            </div>

        </div>
    </form>
@endsection
