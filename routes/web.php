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
$locale = request()->segment(1);

Route::middleware('setLocale')->prefix($locale)->group(function() {
Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');
Route::get('/about', [App\Http\Controllers\User\HomeController::class, 'about_us'])->name('user.about');
Route::get('/contact_us', [App\Http\Controllers\User\HomeController::class, 'contact_us'])->name('user.contact_us');
Route::get('/blog', [App\Http\Controllers\User\HomeController::class, 'blog'])->name('user.blog');
Route::get('/brands', [App\Http\Controllers\User\HomeController::class, 'brands'])->name('user.brands');
Route::get('/community', [App\Http\Controllers\User\HomeController::class, 'community'])->name('user.community');
Route::get('/blog_detail', [App\Http\Controllers\User\HomeController::class, 'blog_detail'])->name('user.blog_detail');
Route::get('/careers', [App\Http\Controllers\User\HomeController::class, 'careers'])->name('user.careers');
});

/********* dashboard */
Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

/**** Category */
Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category');
Route::get('/category_add', [App\Http\Controllers\Admin\CategoryController::class, 'category_add'])->name('admin.category_add');
Route::post('/store_category', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store_category');
Route::get('/delete_category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('delete_category');

/***** Contact */
Route::get('/contact', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contact');
Route::get('/delete_contact/{id}', [App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('delete_contact');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/****** Brand */
Route::get('/admin/brand', [App\Http\Controllers\Admin\BrandController::class, 'index'])->name('admin.brand');
Route::get('/delete_brand/{id}', [App\Http\Controllers\Admin\BrandController::class, 'destroy'])->name('delete_brand');
Route::get('/brand_add', [App\Http\Controllers\Admin\BrandController::class, 'brand_add'])->name('admin.brand_add');
Route::post('/store_brand', [App\Http\Controllers\Admin\BrandController::class, 'store'])->name('store_brand');

/******* careers */
Route::get('/career', [App\Http\Controllers\Admin\CareerController::class, 'index'])->name('admin.career');
Route::get('/delete_career/{id}', [App\Http\Controllers\Admin\CareerController::class, 'destroy'])->name('delete_career');

Auth::routes();
