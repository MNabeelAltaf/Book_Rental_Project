<?php

use App\Http\Controllers\book_detail;
use App\Http\Controllers\filter;
use App\Http\Controllers\home;
use App\Http\Controllers\logout;
use App\Http\Controllers\profile;
use App\Http\Controllers\registration;


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


Route::get('registration', [registration::class, 'registrationView'])->name('registration_view');
Route::get('login', [registration::class, 'loginView'])->name('login_view');

Route::post("registration", [registration::class, 'registrationData'])->name("registration");
Route::post("login", [registration::class, 'loginData'])->name("login")->middleware('throttle:2,1');



Route::get("logout", [logout::class, "logout"])->name("logout");

Route::get('/update-profile', [registration::class, 'update_profile'])->name('update_user_info');
Route::post('/edit-data', [registration::class, 'edit_data'])->name('edit-data');

// middleware to prevent going back 
Route::group(['middleware' => 'disable_back_btn'], function () {
    Route::get('/book-detail', [book_detail::class, 'book_detail'])->name('book_detail');
    Route::get('/rent-book', [book_detail::class, 'book_rented'])->name('book_rented');

    Route::get('/home', [home::class, 'homeView'])->name('homeView');
    Route::get('/', [home::class, 'homeView'])->name('homeView');

    Route::get("profile", [profile::class, "profileView"])->name("profileView");

    Route::get('/rented_book_detail', [book_detail::class, 'rented_book_detail'])->name('rented_book_detail');
    Route::get('/return-book', [book_detail::class, 'return_rented_book'])->name('return_rented_book');

});


Route::post('/filter',[filter::class,'apply_filter'])->name('filter'); 
