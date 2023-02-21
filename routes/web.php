<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController; //Hello controller di ambil dari nama kelas controller tersebut
use App\Http\Controllers\PostController;
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

Route::get('/', function () { //bisa kita lihat bahwa kode yang di samping yaitu / adalah url utamanya dan menggunakan anonymus function lebih lengkap ada di bawah |
    return view('welcome'); //menampilkan yang ada di /resources/views/welcome.php atau bisa menggunakan blade contoh welcome.blade.php
});


Route::get('greeting', function(){ //parameter greeting bisa kita panggil di url dengan cara http://127.0.0.1:8000/greeting | ->/greeting<-
    return view('greeting'); //menampilkan yang ada di /resources/views/greeting.php atau bisa menggunakan blade contoh greeting.blade.php
});


//cara pemanggilan dari controller:

//cara pertama
// Route::get('controller-call', 'App\Http\Controllers\Hello\Controller\HelloController@index');

//cara kedua menggunakan use dari namespace nya ada di atas App\dst
// Route::get('controller-call-1', [HelloController::class, 'index']); // index ini adalah nama dari functionnya
// Route::get('controller-call-2', [HelloController::class, 'hello']); //ini juga sama dengan index cuman beda nama function dan pemanggilan urlnya

Route::post('posts',[PostController::class, 'store']);
Route::get('posts',[PostController::class, 'index']);
Route::get('posts/create',[PostController::class, 'Create']);
Route::get('posts/{id}',[PostController::class, 'Show']);
Route::get('posts/{id}/edit',[PostController::class, 'edit']);
Route::patch('posts/{id}',[PostController::class, 'edit']);
