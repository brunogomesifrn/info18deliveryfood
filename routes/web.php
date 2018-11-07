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

Route::get('/inicio', function () {
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


