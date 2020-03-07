<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', 'HomeController@index')->name('home');

Route::namespace('Formation')->group(function() {
    Route::get('/portail-connexion', 'FormationController@gateway')->name('gateway.formation');
    Route::get('/formation/{id}', 'FormationController@show')->name('show.formation');
    Route::get('/formations/contact', 'FormationController@contact')->name('contact.formations');
});

Route::namespace('Auth')->group(function() {
    /**
     * Accès admin
     */
    Route::namespace('Admin')->group(function() {
       Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard.admin');
    });

    /**
     * Sécurité générale
     */
    Route::namespace('Security')->group(function() {
        Route::get('/portail-connexion', 'SecurityController@gateway')->name('gateway');
    });

    /**
     * Accès FBO
     */
    Route::namespace('FBO')->group(function() {
        // Inscription
        Route::get('/inscription/fbo', 'RegisterController@showRegisterForm')->name('showForm.register.fbo');
        Route::post('/inscription/fbo', 'RegisterController@register');
        Route::get('/inscription/confirmation-demande', 'RegisterController@confirmRegister')->name('confirmation.register.fbo');
        // Connexion
        Route::get('/connexion/fbo', 'LoginController@showLoginForm')->name('login.fbo');
        Route::post('/connexion/fbo', 'LoginController@login');

        // Tableau de bord
        Route::get('/fbo/dashboard', 'DashboardController@index')->name('dashboard.fbo');
    });

    /**
     * Accès invité
     */
    Route::namespace('Passcode')->group(function() {
        Route::get('/connexion/passcode', 'LoginController@showLoginForm')->name('login.passcode');
        Route::post('/connexion/passcode', 'LoginController@login');
    });

    Route::get('logout', 'LoginController@logout')->name('logout');

    // Mot de passe oublié
    Route::get('mot-de-passe/reinitialisation', 'ForgotPasswordController@showLinkRequestForm');
    Route::post('mot-de-passe/email', 'ForgotPasswordController@sendResetLinkEmail');
    Route::get('mot-de-passe/reinitialisation/{token}', 'ResetPasswordController@showResetForm');
    Route::post('mot-de-passe/reinitialisation', 'ResetPasswordController@reset');
});

Route::get('/langue/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
})->name('lang');

Auth::routes();

Route::get('mailable', function () {
    return new App\Mail\RequestPassword();
});
