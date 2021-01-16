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
    return view('welcome');
});

Auth::routes();

Route::get('admin-page', function() {
    return 'Halaman untuk Admin';
})->middleware('role:admin')->name('admin.page');

Route::get('meja-page', function() {
    return 'Halaman untuk Meja';
})->middleware('role:meja')->name('meja.page');

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/category', 'CategoryController')->middleware("role:admin");
Route::resource('/menu', 'MenuController')->middleware('role:admin');