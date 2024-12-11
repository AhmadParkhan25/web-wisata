<?php

use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact"
    ]);
});

Route::get('/services', function () {
    return view('services', [
        "title" => "services"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "blog"
    ]);
});

Route::get('/blog2', function () {
    return view('blog2', [
        "title" => "blog"
    ]);
});

Route::get('/blog3', function () {
    return view('blog3', [
        "title" => "blog"
    ]);
});


Route::get('/tambah', function () {
    return view('tambahwisata');
});
Auth::routes();

Route::resource('/home', WisataController::class);
// Route::resource('/home', WisataController::class);

Route::middleware(['auth'])->group(function () {});
