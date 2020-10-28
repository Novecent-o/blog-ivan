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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
  return view('home.index');
})->name('home');

Route::get('/chi-sono', function () {
  return view('chisono.index');
})->name('chi-sono');

Route::get('/hobby', function () {
  return view('hobby.index');
})->name('hobby');

Route::resource('projects', 'ProjectController');

Auth::routes();
