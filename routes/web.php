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
    return view('welcome', ['websit' => 'Laravel']);
});

Route::get('hello', function () {
    return 'Hello, welcome to LaravelAcademy.org';
});

Route::view('view', 'welcome', ['websit' => 'Laravel学院']);

Route::get('user/{id}', function ($id) {
    return 'User ' . $id;
});
