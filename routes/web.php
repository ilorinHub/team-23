<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GoogleLoginController;

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

//Routes
Route::get('/', [LoginController::class, 'loginForm']);
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'dashboards'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboards.index');
    });

    Route::group(['prefix' => 'ministry'], function () {
        Route::get('view-all', [MinistryController::class, 'index'])->name('ministry.all');
        Route::get('add-new', [MinistryController::class, 'addNew'])->name('ministry.addNew');
        Route::post('/create', [MinistryController::class, 'store'])->name('ministry.store');
        Route::get('/edit/{id}', [MinistryController::class, 'edit'])->name('ministry.edit');
        Route::post('/update/{id}', [MinistryController::class, 'update'])->name('ministry.update');
        Route::get('/delete/{id}', [MinistryController::class, 'destroy'])->name('ministry.delete');
    });
    Route::group(['prefix' => 'department'], function () {
        Route::get('view-all', [DepartmentController::class, 'index'])->name('department.all');
        Route::get('add-new', [DepartmentController::class, 'addNew'])->name('department.addNew');
        Route::post('/create', [DepartmentController::class, 'store'])->name('department.store');
        Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
        Route::post('/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
        Route::get('/delete/{id}', [DepartmentController::class, 'destroy'])->name('department.delete');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('view-all', [UserController::class, 'index'])->name('user.all');
        Route::get('add-new', [UserController::class, 'addNew'])->name('user.addNew');
        Route::post('/create', [UserController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    });
});


Route::get('404', [ErrorController::class, 'index'])->name('error');
Route::get('maintenance', [ErrorController::class, 'maintenance'])->name('maintenance');
// Facebook login routes
Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialController::class, 'callback']);
// Google login routes
Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
// Layout set routes
Route::get('setlayout/{layout}', function ($layout) {
    if (in_array($layout, Config::get('app.layouts'))) {
        session(['layout' => $layout]);
    }
    return redirect()->back();
});
Auth::routes();
