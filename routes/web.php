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
    return view('welcome');
});

Route::get('/', 'Home@home')->name('home');
Route::get('login', 'Home@login')->name('login');

Route::post('check_login', 'Home@check_login');
Route::group(['middleware' => ['Check_auth']], function () {
Route::get('dashboard', 'Home@dashboard')->name('dashboard');

});

Route::post('submit_contact_form', 'Home@submit_contact_form')->name('submit_contact_form');
Route::get('get_allcontact_query', 'Home@get_allcontact_query')->name('get_allcontact_query');
Route::get('log_out', 'Home@log_out')->name('log_out');
