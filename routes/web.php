<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanHKIController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


// Rute admin
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
        Route::get('/admin/user', [AdminUserController::class, 'index'])->name('users.index');
        Route::post('/admin/user/add', [AdminUserController::class, 'store'])->name('users.store');
        Route::delete('/admin/user/{id_users}', [AdminUserController::class, 'destroy'])->name('users.destroy');
        Route::get('/admin/user/edit/{id}', [AdminUserController::class, 'edit'])->name('users.edit');


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
    Route::get('/user/tinjauan', function () {
        return view('user.tinjauan');
    });

Route::get('/user/profile', [UserProfileController::class, 'show'])->name('user.profile');
Route::put('/user/profile', [UserProfileController::class, 'update'])->name('user.profile.update');
Route::get('/pengajuan/show', [PengajuanHKIController::class, 'show'])->name('pengajuan.show');
Route::get('/pengajuan/create', [PengajuanHKIController::class, 'create'])->name('pengajuan.create');
Route::post('/pengajuan/store', [PengajuanHKIController::class, 'store'])->name('pengajuan.store');
Route::get('/user/status', [PengajuanHKIController::class, 'index'])->name('user.status');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/', [LandingController::class, 'index'])->name('landing.index');