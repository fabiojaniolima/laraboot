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

Route::prefix('painel')->middleware('auth')->group(function () {
    Route::get('/', 'Painel\HomeController@index')->name('dashboard');

    Route::get('alterar-senha', 'Painel\AlterarSenhaController@index')->name('alterar-senha');
    Route::post('alterar-senha', 'Painel\AlterarSenhaController@alterarSenha')->name('alterar-senha');

    Route::get('alterar-email', 'Painel\AlterarEmailController@index')->name('alterar-email');
    Route::post('alterar-email', 'Painel\AlterarEmailController@alterarEmail')->name('alterar-email');
});
