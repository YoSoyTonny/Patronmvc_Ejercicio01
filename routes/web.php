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


Route::get('/', 'NoticiaController@index') ->name('front.noticias.create');
Route::get('/noticias/{id}', 'NoticiaController@show')->name('front.noticias.show');



Route::get('/admin', 'AdminController@dashboard')->name('admin.dashboard');

//
Route::resource('/admin/noticias', 'Admin\NoticiaController');
Route::resource('/admin/usuarios', 'Admin\UsuarioController');
Auth::routes(['register' => false]);