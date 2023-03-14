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
Route::get('/dashboardAdmin/dashboard', function () {
    return view('dashboardAdmin.dashboard');
});

Route::get('/dashboardAdmin/adminProfile', function () {
    return view('dashboardAdmin.adminProfile');
});

Route::get('/dashboardAdmin/tables', function () {
    return view('dashboardAdmin.tables');
});

Route::get('/dashboardAdmin/notification', function () {
    return view('dashboardAdmin.notification');
});



# user
Route::get('/dashboardUser/dashboard', function () {
    return view('dashboardUser.dashboard');
});

Route::get('/dashboardUser/mhsProfile', function () {
    return view('dashboardUser.mhsProfile');
});

Route::get('/dashboardUser/form', function () {
    return view('dashboardUser.form');
});

Route::get('/dashboardUser/status', function () {
    return view('dashboardUser.notification');
});