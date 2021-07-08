<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/* Admin */
Route::get('/admin', function () {
    return view('admin-homepage');
});

Route::get('admin/home', function () {
    return view('admin-home');
});

Route::get('admin/addBook', function () {
    return view('admin-addbook');
});

/* General User */
Route::get('/', function () {
    return view('homepage');
});

Route::get('book-list', function () {
    return view('uni-book');
});

Route::get('category', function () {
    return view('uni-category');
});

Route::get('shop-list', function () {
    return view('uni-shophere');
});

/* Books */
Route::get('book/The_Rise_of_Kyoshi', function () {
    return view('books/kyoshi');
});
Route::get('book/book/Eternals_2021', function () {
    return view('books/eternals');
});

Auth::routes();
/* Route::get('/home', [App\Http\Controllers\UserController::class, 'rolediff'])->name('home'); */
/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('role');

Route::get('book/The_Rise_of_Kyoshi', 'App\Http\Controllers\BookController@retrieveReview');
Route::post('book/The_Rise_of_Kyoshi','App\Http\Controllers\BookController@savereview');

Route::get('book/Eternals_2021', 'App\Http\Controllers\BookController@retrieveReview2');
Route::post('book/Eternals_2021','App\Http\Controllers\BookController@savereview2');

Route::get('admin/home', 'App\Http\Controllers\BookController@retrieveCategory');
Route::post('admin/home','App\Http\Controllers\BookController@addCategory');
Route::get('admin/addBook', 'App\Http\Controllers\BookController@retrieveBook');
Route::post('admin/addBook','App\Http\Controllers\BookController@addBook');

