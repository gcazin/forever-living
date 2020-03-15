@extends('auth.emails.layouts.base')

@section('body')
    <h1>Vos identifiants de connexion</h1>

    <ul>
        <li>Identifiant: {{ $user->fbo_number }}</li>
        <li>Mot de passe: {{ $user->password_clear }}</li>
    </ul>
@endsection
