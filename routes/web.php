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
    return view('inicio');
});


Route::get('/comidas', function () {
    return view('comidas');
});




Route::get('/orcamento', function () {
    return view('orcamento');
});




Route::get('/somos', function () {
    return view('somos');
});


Route::get('/cadastro', function () {
    return view('cadastro');
});


Route::get('/autenticacao', function () {
    return view('tela_login');
})->name('autenticacao');


Route::get('/perfil', function () {
    return view('perfil');
})->middleware('auth');

Route::get('/desconectar', function () {
	Auth::logout();
    return view('inicio');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
