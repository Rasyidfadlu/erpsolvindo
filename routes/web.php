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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboardAdmin', function () {
    return view('dashboardAdmin');
});

Route::get('/profileAdmin','profileAdminController@index')->middleware('auth')->name('profileAdmin');

Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('/aktifasiCustomer/prospekData', 'CustomerActivationController@index');
Route::get('/aktifasiCustomer/create', 'CustomerActivationController@create');
Route::get('/aktifasiCustomer/prosesInstallasi', 'CustomerActivationController@show');
Route::post('/aktifasiCustomer', 'CustomerActivationController@store');
Route::post('/aktifasiCustomer/search', 'CustomerActivationController@search');
Route::delete('/aktifasiCustomer/{id}', 'CustomerActivationController@destroy');

Route::post('/ispPartner', 'CustomerController@store')->middleware('auth')->name('ispPartner');
Route::get('/ispPartner', 'CustomerController@index')->middleware('auth')->name('ispPartner');
Route::get('/ispPartner/create', 'CustomerController@create')->middleware('auth')->name('ispPartnerCreate');
Route::get('/ispPartner/search', 'CustomerController@search')->middleware('auth')->name('ispPartnersearch');
Route::delete('/ispPartner/{id}', 'CustomerController@destroy')->middleware('auth')->name('ispPartnerindestroy');