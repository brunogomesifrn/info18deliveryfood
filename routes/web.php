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

<<<<<<< HEAD


Route::get('/comidas', function () {
    return view('comidas');
});




Route::get('/orçamento', function () {
    return view('orcamento');
});




Route::get('/somos', function () {
    return view('somos');
});


Route::get('/cadastro', function () {
    return view('cadastro');
});
=======
<<<<<<< HEAD

Route::get('/comer', function () {
    return view('comidas');
});
=======
>>>>>>> 2ef56f25a0f85843a433b8384abc4dac1525ef2d
>>>>>>> e76c40fe52ba453112f0b205e0dd35fbe99b3967
