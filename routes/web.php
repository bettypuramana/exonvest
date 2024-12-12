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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('setLocale')->prefix($locale)->group(function() {
Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');
Route::get('/about', [App\Http\Controllers\User\HomeController::class, 'about_us'])->name('user.about');
Route::get('/contact_us', [App\Http\Controllers\User\HomeController::class, 'contact_us'])->name('user.contact_us');
Route::get('/blog', [App\Http\Controllers\User\HomeController::class, 'blog'])->name('user.blog');
Route::get('/blog_detail', [App\Http\Controllers\User\HomeController::class, 'blog_detail'])->name('user.blog_detail');
Route::get('/careers', [App\Http\Controllers\User\HomeController::class, 'careers'])->name('user.careers');
});
