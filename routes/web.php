<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\admMiddleware;
use \App\Http\Middleware\authen;

Route::get('/', 'start@start')->name('home');


\\rotas privadas
Route::middleware(admMiddleware::class)->middleware(authen::class)->prefix('/logado')->group(function(){
    Route::get('/admin', 'adminController@adm')->name('admin');
    Route::get('/add', 'adminController@add')->name('add');
    Route::post('/add', 'adminController@addERedirect')->name('data');
    Route::get('/delete', 'adminController@delete')->name('delete');
    Route::get('/update', 'adminController@update')->name('update');
    Route::get('/delete/{p}', 'adminController@delete1')->name('delete1');
    Route::post('/update', 'adminController@updateERedirect')->name('updateNRed');
    Route::get('/update/{p}', 'adminController@update1')->name('update1');
});
\\visitantes
Route::get('/logout', 'loginController@logout')->name('logout');
Route::get('/login', 'loginController@login')->name('login');
Route::post('/login', 'loginController@autenticar')->name('login');

Route::get('/cadastro', 'loginController@cadastro')->name('cadastro');
Route::post('/cadastro', 'loginController@cadastrar')->name('cadastrar');

Route::fallback(function(){
    echo 'Essa pagina não existe <br> <a href="'.route('home').'">voltar para a pagina principal</a>';
});
