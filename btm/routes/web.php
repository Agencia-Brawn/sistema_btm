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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/', 'IndexController@index')->name('index');

Route::post('/topo1', 'HomeController@topo1')->name('topo1');

Route::post('/slide', 'HomeController@slide')->name('slide');

Route::post('/logo', 'HomeController@logo')->name('logo');

Route::post('/rodapeslide', 'HomeController@rodapeslide')->name('rodapeslide');

Route::post('/menu', 'HomeController@menu')->name('menu');

Route::post('/associados', 'HomeController@associados')->name('associados');

Route::post('/receita', 'HomeController@receita')->name('receita');

Route::post('/footer', 'HomeController@footer')->name('footer');




