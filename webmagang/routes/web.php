<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\RecomendationController;
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

Auth::routes();

Route::redirect('/', '/home');
Route::get('/home', [FrontController::class, 'home']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog.index');
Route::get('/blog/{slug}-{id}', [FrontController::class, 'blogDetail'])->name('front.blog.show');
Route::get('/services', [FrontController::class, 'services']);
Route::get('/contact', [FrontController::class, 'contact']);

Route::group(['middleware' => "auth", "prefix" => "admin", "as" => "admin."], function () {
    Route::resource("wisata", WisataController::class);
    Route::resource("recomendation", RecomendationController::class)->only(['index', 'create', 'store', 'destroy']);
});
