<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllerbooks;
use App\Http\Controllers\Controllerkategori;
use App\Http\Controllers\Controllerpenerbit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/books', [Controllerbooks::class, 'index']);

Route::get('/create', [Controllerbooks::class, 'create']);

Route::get('/edit/{book}', [Controllerbooks::class, 'edit']);

Route::post('/store', [Controllerbooks::class, 'store']);

Route::put('/update/{book}', [Controllerbooks::class, 'update']);

Route::delete('/delete/{book}', [Controllerbooks::class, 'delete']);

Route::get('/category', [Controllerkategori::class, 'index']);

Route::get('/createcategory', [Controllerkategori::class, 'tambah']);

Route::post('/storecategory', [Controllerkategori::class, 'storecategory']);

Route::get('/editKategori/{kategori}', [Controllerkategori::class, 'edit']);

Route::put('/updatekategori/{kategori}', [Controllerkategori::class, 'update']);

Route::delete('/deletekategori/{kategori}', [Controllerkategori::class, 'delete']);

Route::get('/penerbit', [Controllerpenerbit::class, 'index']);

Route::get('/createpenerbit', [Controllerpenerbit::class, 'plus']);

Route::post('/storepenerbit', [Controllerpenerbit::class, 'storepenerbit']);

Route::get('/editpenerbit/{penerbit}', [Controllerpenerbit::class, 'edit']);

Route::put('/updatepenerbit/{penerbit}', [Controllerpenerbit::class, 'update']);

Route::delete('/deletepenerbit/{penerbit}', [Controllerpenerbit::class, 'delete']);



