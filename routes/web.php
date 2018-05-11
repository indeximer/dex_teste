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
    return view('home/index');
});

Route::get('/noticias', 'NoticiasController@index');
Route::get('/noticias/{slug}', 'NoticiasController@post');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/noticias', 'AdminController@listaNoticias');
Route::get('/admin/adicionarNoticia', 'AdminController@adicionarNoticia');
Route::get('/admin/adicionarNoticia/{id}', 'AdminController@adicionarNoticia');
Route::post('/admin/inserirNoticia', 'AdminController@inserirNoticia');
Route::get('/admin/removerNoticia/{id}', 'AdminController@removerNoticia');