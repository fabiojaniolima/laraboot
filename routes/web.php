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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('painel')->middleware('auth')->group(function () {
    Route::get('/', 'Panel\HomeController@index')->name('dashboard');

    Route::get('alterar-perfil', 'Panel\User\ChangeUserProfileController@index');
    Route::post('alterar-perfil', 'Panel\User\ChangeUserProfileController@changeUserProfile');

    Route::get('alterar-email', 'Panel\User\ChangeEmailController@index');
    Route::post('alterar-email', 'Panel\User\ChangeEmailController@changeEmail');

    Route::get('alterar-senha', 'Panel\User\ChangePasswordController@index');
    Route::post('alterar-senha', 'Panel\User\ChangePasswordController@changePassword');
});
