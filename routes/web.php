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
    return view('praktikum2');
});
Route::get('assignment4', function () {
    //yang disini untuk yg tidak banyak proses
    return view('assignment4');
});


//untuk yg ngeload banyak proses
Route::get('formEts',"ViewController@etsShow");

Route::get('formHtmlPhp',"ViewController@phpShowHTML");
Route::post('formPhp',"ViewController@phpShowPHP");

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');
Route::post('/pegawai/update','PegawaiController@update');

//route tugasPendapatan
//route CRUD
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');


//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD modem
Route::get('/modem','ModemController@index');
Route::get('/modem/tambah','ModemController@tambah');
Route::post('/modem/store','ModemController@store');
Route::get('/modem/edit/{id}','ModemController@edit');
Route::get('/modem/hapus/{id}','ModemController@hapus');
Route::get('/modem/cari','ModemController@cari');
Route::get('/modem/view/{id}','ModemController@detail');


