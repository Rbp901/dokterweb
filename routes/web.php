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
/*
Route::get('datamurid', function () {
  return view('datamurid');
});
*/
Route::get('/home', function () {
  return view('/home');
});

Route::get('/contact', function () {
  return view('contact');
});
/*
Route::get('/cv', function () {
  return view('cv');
});

Route::get('datatamu', function () {
  return view('datatamu');
});  */

Route::get('dataspesialis', function () {
  return view('dataspesialis');
}); 

Route::get('datadokter', function () {
  return view('datadokter');
}); 

Route::get('datajaga', function () {
  return view('datajaga');
}); 


/*
Route::get('/input', 'MalasngodingController@input'); 
Route::post('/proses', 'MalasngodingController@proses');

Route::get('/datamurid', 'DatamuridController@index');
Route::get('/datamurid/tambah', 'DatamuridController@tambah');
Route::post('/datamurid/store', 'DatamuridController@store');
Route::get('/datamurid/edit/{id}', 'DatamuridController@edit');
Route::put('/datamurid/update/{id}', 'DatamuridController@update');
Route::get('/datamurid/hapus/{id}', 'DatamuridController@delete');

Route::get('/datamurid/cari','DatamuridController@cari');

Route::get('/input', 'MalasngodingController@input'); 
Route::post('/proses', 'MalasngodingController@proses');


Route::get('/datatamu', 'DatatamuController@index');
Route::get('/datatamu/tambah', 'DatatamuController@tambah');
Route::post('/datatamu/store', 'DatatamuController@store');
Route::get('/datatamu/edit/{id}', 'DatatamuController@edit');
Route::put('/datatamu/update/{id}', 'DatatamuController@update');
Route::get('/datatamu/hapus/{id}', 'DatatamuController@delete');

Route::get('/datatamu/cari','DatatamuController@cari'); */


Route::get('/dataspesialis', 'DataspesialisController@index');
Route::get('/datatamu/tambah', 'DataspesialisController@tambah');
Route::post('/dataspesialis/store', 'DataspesialisController@store');
Route::get('/dataspesialis/edit/{id}', 'DataspesialisController@edit');
Route::put('/dataspesialis/update/{id}', 'DataspesialisController@update');
Route::get('/dataspesialis/hapus/{id}', 'DataspesialisController@delete');

Route::get('/dataspesialis/cari','DataspesialisController@cari');


Route::get('/datadokter', 'DatadokterController@index');
Route::get('/datadokter/tambah', 'DatadokterController@tambah');
Route::post('/datadokter/store', 'DatadokterController@store');
Route::get('/datadokter/edit/{id}', 'DatadokterController@edit');
Route::put('/datadokter/update/{id}', 'DatadokterController@update');
Route::get('/datadokter/hapus/{id}', 'DatadokterController@delete');

Route::get('/datadokter/cari','DatadokterController@cari');


Route::get('/datajaga', 'DatajagaController@index');
Route::get('/datajaga/tambah', 'DatajagaController@tambah');
Route::post('/datajaga/store', 'DatajagaController@store');
Route::get('/datajaga/edit/{id}', 'DatajagaController@edit');
Route::put('/datajaga/update/{id}', 'DatajagaController@update');
Route::get('/datajaga/hapus/{id}', 'DatajagaController@delete');

Route::get('/datajaga/cari','DatajagaController@cari');



Route::get('/datalihatdokter', 'DatalihatdokterController@index');
Route::get('/datalihatdokter/tambah', 'DatalihatdokterController@tambah');
Route::post('/datalihatdokter/store', 'DatalihatdokterController@store');
Route::get('/datalihatdokter/edit/{id}', 'DatalihatdokterController@edit');
Route::put('/datalihatdokter/update/{id}', 'DatalihatdokterController@update');
Route::get('/datalihatdokter/hapus/{id}', 'DatalihatdokterController@delete');

Route::get('/datalihatdokter/cari','DatalihatdokterController@cari');




Route::get('/datajadwal', 'DatajadwalController@index');
Route::get('/datajadwal/tambah', 'DatajadwalController@tambah');
Route::post('/datajadwal/store', 'DatajadwalController@store');
Route::get('/datajadwal/edit/{id}', 'DatajadwalController@edit');
Route::put('/datajadwal/update/{id}', 'DatajadwalController@update');
Route::get('/datajadwal/hapus/{id}', 'DatajadwalController@delete');

Route::get('/datajadwal/cari','DatajadwalController@cari');

