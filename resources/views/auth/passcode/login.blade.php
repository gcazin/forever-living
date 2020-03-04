@extends('layouts.app')

@section('content')
    <div class="container-full w-4/12 mx-auto">
        <div class="form-group">
            <v-input label="Entrer votre passcode" name="passcode" placeholder="Entrer votre passcode"></v-input>
        </div>
        <button class="btn btn-blue btn-block" type="submit">Connexion</button>
    </div>
@endsection
