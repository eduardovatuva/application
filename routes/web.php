<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('lista');
});
Route::get('livro/novo','LivroController@create')->name('novo_livro');
Route::post('/livro/novo','LivroController@store')->name('salvar_livro');
Route::get('/livro/list','LivroController@show')->name('lista');
Route::get('/livro/del/{id}','LivroController@destroy')->name('excluir_livro');
Route::get('/livro/edit/{id}','LivroController@edit')->name('editar_livro');
Route::post('/livro/edit/{id}','LivroController@update')->name('atualizar_livro');


