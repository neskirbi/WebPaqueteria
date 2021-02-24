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
    return view('home');
})->name('home');

Route::get('loginsup', function () {
    return view('supervisor.loginsup');
})->name('loginsup');


Route::get('dashboard', function () {
    return view('supervisor.dashboard');
})->name('dashboard');

/*Route::get('repartidores', function () {
    return view('supervisor.repartidores');
})->name('repartidores');*/
Route::resource('repartidores', 'ControllerRepartidores');
Route::resource('almacenistas', 'AlmacenistaController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
