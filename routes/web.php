<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DosenController;

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

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

Route::get('/helopertemuan1', function () {
    return view('helopertemuan1');
});

Route::get('/stylepertemuan1', function () {
    return view('stylepertemuan1');
});

Route::get('/style2pertemuan1', function () {
    return view('style2pertemuan1');
});

Route::get('/responsive1pertemuan2', function () {
    return view('responsive1pertemuan2');
});

Route::get('/hiralinktreetugas', function () {
    return view('hiralinktreetugas');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/5026221212', function () {
    return view('5026221212');
});

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

Route::get('/dvd', 'App\Http\Controllers\DVDController@index_dvd');
Route::get('/dvd/tambah','App\Http\Controllers\DVDController@tambah_dvd');
Route::post('/dvd/store','App\Http\Controllers\DVDController@store');
Route::get('/dvd/edit/{id}','App\Http\Controllers\DVDController@edit');
Route::post('/dvd/update','App\Http\Controllers\DVDController@update');
Route::get('/dvd/hapus/{id}','App\Http\Controllers\DVDController@hapus');
Route::get('/dvd/cari','App\Http\Controllers\DVDController@cari');

Route::get('/keranjangbelanja', 'App\Http\Controllers\KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/create', 'App\Http\Controllers\KeranjangBelanjaController@create');
Route::post('/keranjangbelanja/store', 'App\Http\Controllers\KeranjangBelanjaController@store');
Route::delete('keranjangbelanja/destroy/{ID}', 'App\Http\Controllers\KeranjangBelanjaController@destroy');
