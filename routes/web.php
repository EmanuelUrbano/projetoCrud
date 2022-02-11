<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'start@start')->name('home');

Route::prefix('/logado')->group(function(){
    Route::get('/admin', 'adminController@adm')->name('admin');
    Route::get('/add', 'adminController@add')->name('add');
    Route::post('/add', 'adminController@addERedirect')->name('data');
    Route::get('/delete', 'adminController@delete')->name('delete');
    Route::get('/update', 'adminController@update')->name('update');
});

Route::get('/logout', 'loginController@logout')->name('logout');
Route::get('/login', 'loginController@login')->name('login');
Route::get('/cadastro', 'loginController@cadastro')->name('cadastro');
Route::post('/cadastro', 'loginController@receberInformacoes')->name('receberInformacoes');

Route::fallback(function(){
    echo 'Essa pagina não existe <br> <a href="'.route('home').'">voltar para a pagina principal</a>';
});