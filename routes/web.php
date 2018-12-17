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

Route::get('/categorias_produtos', 'Categoria_ProdutoControlador@index')->middleware('auth');
Route::get('/categorias_produtos_cadastrar', 'Categoria_ProdutoControlador@create')->middleware('auth');
Route::post('/categorias_produtos_salvar', 'Categoria_ProdutoControlador@store')->middleware('auth');
Route::get('/categorias_produtos_remover/{id}', 'Categoria_ProdutoControlador@destroy')->middleware('auth');
Route::get('/categorias_produtos_editar/{id}', 'Categoria_ProdutoControlador@edit')->middleware('auth');
Route::post('/categorias_produtos_atualizar/{id}', 'Categoria_ProdutoControlador@update')->middleware('auth');

Route::get('/perfis_usuarios', 'Perfil_UsuarioControlador@index')->middleware('auth');
Route::get('/perfis_usuarios_cadastrar', 'Perfil_UsuarioControlador@create')->middleware('auth');
Route::post('/perfis_usuarios_salvar', 'Perfil_UsuarioControlador@store')->middleware('auth');
Route::get('/remover_perfis/{id}', 'Perfil_UsuarioControlador@destroy')->middleware('auth');
Route::get('/editar_perfis/{id}', 'Perfil_UsuarioControlador@edit')->middleware('auth');
Route::post('/atualizar_perfis/{id}', 'Perfil_UsuarioControlador@update')->middleware('auth');


Route::get('/listagem_de_produtos', 'ProdutosControlador@index')->middleware('auth');
Route::get('/produtos_cadastrar', 'ProdutosControlador@create')->middleware('auth');
Route::post('/salvar_produtos', 'ProdutosControlador@store')->middleware('auth');
Route::get('/remover_produtos/{id}', 'ProdutosControlador@destroy')->middleware('auth');
Route::get('/editar_produtos/{id}', 'ProdutosControlador@edit')->middleware('auth');
Route::post('/atualizar_produtos/{id}', 'ProdutosControlador@update')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
