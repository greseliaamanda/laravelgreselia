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
Route::get('/home', 'HomeController@index')->name('home');

//project home
Route::get('/project','ProjectController@project');
//project lihat buku user
Route::get('/project/buku','LihatBukuController@lihat');
//project login-logout
Route::get('/login','LoginProjectController@login')->name('login');
Route::post('/postlogin','LoginProjectController@postlogin');
Route::get('/logout','LoginProjectController@logout');
//project dalam middleware
Route::group(['middleware'=>'auth'], function(){
    //project dasboard
    Route::get('/dashboard', 'DashboardController@dashboard');
    //project buku
    Route::get('/buku', 'BukuController@buku');
    Route::post('/buku/create', 'BukuController@create');
    Route::get('/buku/{id}/edit', 'BukuController@edit');
    Route::post('/buku/{id}/update', 'BukuController@update');
    Route::get('/buku/{id}/delete', 'BukuController@delete');
    //project anggota
    Route::get('/anggota', 'AnggotaController@anggota');
    Route::post('/anggota/create', 'AnggotaController@create');
    Route::get('/anggota/{id}/edit', 'AnggotaController@edit');
    Route::post('/anggota/{id}/update', 'AnggotaController@update');
    Route::get('/anggota/{id}/delete', 'AnggotaController@delete');
    //project pinjam
    Route::get('/pinjam', 'PinjamController@pinjam');
    Route::post('/pinjam/create', 'PinjamController@create');
    Route::get('/pinjam/data', 'PinjamController@data');
    //project kembali
    Route::get('/kembali', 'KembaliController@kembali');
    Route::post('/kembali/create', 'KembaliController@create');
    Route::get('/kembali/{anggota_id}/pengembalian', 'KembaliController@pengembalian');
    Route::get('/kembali/data', 'KembaliController@data');
});
