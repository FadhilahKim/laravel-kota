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
// Route::get('/', function() {
// 	return view('index');
// });

// Route::get('/profile', function() {
// 	$name = 'Nurfadhilah';
	// return view('profile', ['name' => $name]);
// });

// Route::get('/mahasiswa', function() {
// 	return view('mahasiswa');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', 'HomeController@index')->name('home');


//UNTUK SEMENTARA INI DI KOMENTAR
// Route::get('/', 'pagescontroller@index');
// Route::get('/profile', 'pagescontroller@profile');
//SAMPAI BARIS INI

// Route::get('/mahasiswa/create', 'mahasiswacontroller@create');
// Route::get('/mahasiswa', 'mahasiswacontroller@index');

// //tambah data
// Route::post('/mahasiswa', 'mahasiswacontroller@store');

// //delete
// Route::delete('/mahasiswa/{mahasiswa}', 'mahasiswacontroller@destroy');

// //edit
// Route::get('/mahasiswa/{mahasiswa}/edit', 'mahasiswacontroller@edit');

// //update
// Route::patch('/mahasiswa/{mahasiswa}', 'mahasiswacontroller@update');

//INI JUGA DIKOMNTAR DULU
// Route::resource('mahasiswa', 'mahasiswacontroller');
//SAMPAI DISINI

//INDEX KOTA
Route::get('/', 'kotacontroller@kota');
// Route::resource('kota', 'tambahcontroller');

Route::get('/kota/create', 'tambahcontroller@create');
Route::get('/kota', 'tambahcontroller@index');

// //tambah data
Route::post('/kota', 'tambahcontroller@store');

// //delete
Route::delete('/kota/{kota}', 'tambahcontroller@destroy');

// //edit
Route::get('/kota/{kota}/edit', 'tambahcontroller@edit');

// //update
Route::patch('/kota/{kota}', 'tambahcontroller@update');

