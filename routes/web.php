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

/********* news letter */
Route::get('/news_letter', [App\Http\Controllers\Admin\NewsletterController::class, 'index'])->name('admin.news_letter');
Route::get('/delete_news_letter/{id}', [App\Http\Controllers\Admin\NewsletterController::class, 'destroy'])->name('delete_news_letter');
Route::get('/export', [App\Http\Controllers\Admin\NewsletterController::class, 'export'])->name('admin.export');

/********* blog */
Route::get('/admin/blog', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('admin.blog');
Route::get('/blog_add', [App\Http\Controllers\Admin\BlogController::class, 'blog_add'])->name('admin.blog_add');
Route::post('/store_blog', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('store_blog');
Route::get('/edit_blog/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('edit_blog');
Route::post('/update_blog/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('update_blog');
Route::get('/delete_blog/{id}', [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('delete_blog');

/******* Tag */
Route::get('/tag', [App\Http\Controllers\Admin\TagController::class, 'index'])->name('admin.tag');
Route::get('/tag_add', [App\Http\Controllers\Admin\TagController::class, 'tag_add'])->name('admin.tag_add');
Route::post('/store_tag', [App\Http\Controllers\Admin\TagController::class, 'store'])->name('store_tag');
Route::get('/delete_tag/{id}', [App\Http\Controllers\Admin\TagController::class, 'destroy'])->name('delete_tag');

/******** Testimonials */
Route::get('/admin/testimonial', [App\Http\Controllers\Admin\TestimonialController::class, 'index'])->name('admin.testimonial');
Route::get('/testimonial_add', [App\Http\Controllers\Admin\TestimonialController::class, 'testimonial_add'])->name('admin.testimonial_add');
Route::post('/store_testimonial', [App\Http\Controllers\Admin\TestimonialController::class, 'store'])->name('store_testimonial');
Route::get('/edit_testimonial/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'edit'])->name('edit_testimonial');
Route::post('/update_testimonial/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'update'])->name('update_testimonial');
Route::get('/delete_testimonial/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'destroy'])->name('delete_testimonial');

Auth::routes();
