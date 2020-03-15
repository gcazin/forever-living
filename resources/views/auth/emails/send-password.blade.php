@component('mail::message')
# Informations de connexion

Veuillez trouver ci-dessous vos informations de connexion.

@component('mail::panel')
Identifiant: {{ $user->fbo_number }}<br>
Mot de passe: {{ $user->password_clear }}
@endcomponent

@component('mail::button', ['color' => 'primary', 'url' => env('APP_URL'.'/connexion/fbo')])
Découvrir votre espace
@endcomponent

@endcomponent
