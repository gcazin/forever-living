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
Route::get('/portail-connexion', 'HomeController@gateway')->name('gateway.home_content');

Route::namespace('Auth')->group(function() {
    /**
     * Accès admin
     */
    Route::namespace('Admin')->group(function() {
        /**
         * Dashboard
         */
        Route::get('/dashboard/admin', 'DashboardController@index')->name('dashboard.admin');

        Route::get('/dashboard/admin/notifications', 'DashboardController@notifications')->name('dashboard.admin.notifications');
        Route::post('/dashboard/admin/notifications', 'DashboardController@sendEmail')->name('dashboard.admin.password.send');

        Route::namespace('Content')->group(function() {
            /**
             * Espace CRUD formation
             */
            Route::get('/dashboard/admin/contenu/formations', 'FormationController@index')->name('manage.content.index.formation.admin');
            /* Créer */
            Route::get('/dashboard/admin/contenu/ajouter-formation', 'FormationController@create')->name('manage.content.create.formation.admin');
            Route::post('/dashboard/admin/contenu/ajouter-formation', 'FormationController@store');
            /* Modifier */
            Route::get('/dashboard/admin/contenu/editer-formation/{id}', 'FormationController@edit')->name('manage.content.edit.formation.admin');
            Route::post('/dashboard/admin/contenu/editer-formation/{id}', 'FormationController@update');
            Route::delete('/dashboard/admin/contenu/supprimer-formation/{id}', 'FormationController@destroy')->name('manage.content.destroy.formation.admin');

            /**
             * Espace CRUD Accueil
             */
            Route::get('/dashboard/admin/contenu/accueil', 'HomeContentController@index')->name('manage.content.index.home.admin');
            Route::get('/dashboard/admin/contenu/editer-accueil/{id}', 'HomeContentController@edit')->name('manage.content.edit.home.admin');
            Route::post('/dashboard/admin/contenu/editer-accueil/{id}', 'HomeContentController@update');
        });
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
        Route::post('/inscription/fbo', 'RegisterController@sendRegister');
        Route::get('/inscription/confirmation-demande', 'RegisterController@confirmRegister')->name('confirmation.register.fbo');
        // Connexion
        Route::get('/connexion/fbo', 'LoginController@showLoginForm')->name('login.fbo');
        Route::post('/connexion/fbo', 'LoginController@login');

        // Tableau de bord
        Route::get('/dashboard/fbo', 'DashboardController@index')->name('dashboard.fbo');

        //Formations
        Route::get('/fbo/formations', 'FormationController@index')->name('index.formations.fbo');
        Route::get('/fbo/formations/{id}', 'FormationController@list')->name('list.formations.fbo');
        Route::get('/fbo/formations/voir/{id}', 'FormationController@show')->name('show.formations.fbo');
    });

    /**
     * Accès invité
     */
    Route::namespace('Passcode')->group(function() {
        Route::get('/connexion/passcode', 'LoginController@showLoginForm')->name('login.passcode');
        Route::post('/connexion/passcode', 'LoginController@login');

        Route::get('/contenu/{id}', 'HomeContentController@showContent')->name('show.home_content');
        Route::get('/contact', 'HomeContentController@contact')->name('contact.home_content');
    });

    Route::get('logout', 'LoginController@logout')->name('logout');

    // Mot de passe oublié
    Route::get('mot-de-passe/reinitialisation', 'ForgotPasswordController@showLinkRequestForm');
    Route::post('mot-de-passe/email', 'ForgotPasswordController@sendResetLinkEmail');
    Route::get('mot-de-passe/reinitialisation/{token}', 'ResetPasswordController@showResetForm');
    Route::post('mot-de-passe/reinitialisation', 'ResetPasswordController@reset');
});

Route::get('/langue/{locale}', function ($locale){
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang');

Auth::routes();
