<?php

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

Route::get('home', function () {
    return view('home');
})-> name ('home');

Route::namespace('App\Http\Controllers\Auth')->group(function () {
    Route::get('login', 'LoginController@show')->name('login.show');
    Route::post('login', 'LoginController@login')->name('login.login');
    Route::get('sign-up', 'SignUpController@show')->name('sign-up.show');
    Route::post('sign-up', 'SignUpController@signUp')->name('sign-up.signUp');
});

Route::get('discussions', function () {
    return view('pages.discussions.index');
})-> name ('discussions.index');

Route::get('discussions/lorem', function () {
    return view('pages.discussions.show');
})-> name ('discussions details');
 
Route::get('discussions/create', function () {
    return view('pages.discussions.form');
})-> name ('create discussions');

Route::get('discussions/answer/1', function () {
    return view('pages.discussions.edit');
})-> name ('edit discussions');

Route::get('users/towick', function () {
    return view('pages.users.show');
})-> name ('user profile');

Route::get('users/towick/edit', function () {
    return view('pages.users.form');
})-> name ('edit profile');
