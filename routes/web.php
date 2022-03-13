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
    return view('index');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/blog-archive', function () {
    return view('blog-archive');
});
Route::get('/blog-archive-2', function () {
    return view('blog-archive-2');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/product-detail', function () {
    return view('product');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
