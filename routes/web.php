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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/wishlist', [App\Http\Controllers\HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');
Route::get('/myaccount', [App\Http\Controllers\HomeController::class, 'account'])->name('account');
Route::get('/myaccount', [App\Http\Controllers\HomeController::class, 'account'])->name('account');
//Admin Routes
Route::get('/404', [App\Http\Controllers\HomeController::class, 'error'])->name('auth.error');
Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
//Store Item
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store.product');
Route::get('/product/{product}/destroy', [App\Http\Controllers\ProductController::class, 'delete'])->name('product.destroy');
//Store Item
Route::post('/email/store', [App\Http\Controllers\SubscriberController::class, 'store'])->name('store.email');
//Store Item
Route::post('/contact/store', [App\Http\Controllers\ContactController::class, 'store'])->name('store.contact');
//shop route
Route::get('/category1', [App\Http\Controllers\ShopController::class, 'category1'])->name('category1.show');
Route::get('/category2', [App\Http\Controllers\ShopController::class, 'category2'])->name('category2.show');
Route::get('/category3', [App\Http\Controllers\ShopController::class, 'category3'])->name('category3.show');
Route::get('/category4', [App\Http\Controllers\ShopController::class, 'category4'])->name('category4.show');
Route::get('/category5', [App\Http\Controllers\ShopController::class, 'category5'])->name('category5.show');
Route::get('/category6', [App\Http\Controllers\ShopController::class, 'category6'])->name('category6.show');
