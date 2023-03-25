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

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/login', function () {
    return view('login.login');
});


#Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/applicant', function () {
    return view('admin.applicant');
});

Route::get('/admin/formPengaju', function () {
    return view('admin.formPengaju');
});

Route::get('/admin/user', function () {
    return view('admin.user');
});



# user
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
});

Route::get('/user/profile', function () {
    return view('user.profile');
});

Route::get('/user/form', function () {
    return view('user.form');
});

Route::get('/user/status', function () {
    return view('user.status');
});

Route::get('/user/file', function () {
    return view('user.file');
});