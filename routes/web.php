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

// Route::get('/home', function () {
//     return view('pages/welcome');
// });

Route::get('/home', 'PagesController@welcome');

Route::get('/staff', 'PagesController@staff');

Route::get('/gallery', 'PagesController@gallery');

// Route::get('/Activities', 'PagesController@Activities');

Route::get('/login', 'PagesController@login');






// s