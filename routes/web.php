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

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/formations', 'FormationController@index')->name('formations');

Route::namespace('Auth')->group(function() {
    Route::get('/obtenir-mot-de-passe', 'RequestPassword@getPassword')->name('getPassword');
    Route::post('/obtenir-mot-de-passe', 'RequestPassword@RequestPassword')->name('requestPassword');
    Route::get('/confirmation-demande', 'RequestPassword@confirmRequestPassword')->name('confirm.requestPassword');

    Route::get('/tableau-de-bord', 'UserController@dashboard')->name('dashboard');
});

Route::get('/lang/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
})->name('lang');

Auth::routes();

