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

Route::resource('book', 'App\Http\Controllers\BookController');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/top', function () {
    return view('top');
});

Route::get('/booklist_paper', function () {
    return view('booklist_paper');
});

Route::get('/booklist_date', function () {
    return view('booklist_date');
});

Route::get('/favorite_paper', function () {
    return view('favorite_paper');
});

Route::get('/favorite_date', function () {
    return view('favorite_date');
});

Route::get('/help', function () {
    return view('help');
});


Route::get('/first', function () {
    return view('first');
});

Route::get('/form', 
	[App\Http\Controllers\UploadImageController::class, "show"]
	)->name("upload_form");

Route::post('/upload', 
	[App\Http\Controllers\UploadImageController::class, "upload"]
	)->name("upload_image");

Route::get('/list', 
	[App\Http\Controllers\ImageListController::class, "show"]
	)->name("image_list");