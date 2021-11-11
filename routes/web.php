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
Route::get('praktikum2', function () {
    //yang disini untuk yg tidak banyak proses
    return view('htmlprak2');
});

//untuk yg ngeload banyak proses
Route::get('isiannama',"ViewController@showForm");
Route::post('greetings',"ViewController@resultGreetings");
