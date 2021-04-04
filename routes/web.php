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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/adminControlling',function (){
    return view('adminControlling');
}); //->middleware(['auth', 'adminCreation']);

Route::post('/bookControlling',function (){
    return view('booksControlling');
}); //->middleware(['auth', 'adminCreation']);

Route::resource('admin','UsersController');

Route::resource('book','BooksController');
