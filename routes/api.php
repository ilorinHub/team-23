<?php

use App\Http\Controllers\ApiFirestoreController;
use App\Http\Controllers\VuestoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'firestore'], function () {
    Route::get('view-all', [ApiFirestoreController::class, 'index']);
    Route::post('/create', [ApiFirestoreController::class, 'store']);
    Route::post('/fileUpload', [ApiFirestoreController::class, 'fileUpload']);
    Route::post('/update/{id}', [ApiFirestoreController::class, 'update']);
    Route::get('/view/{id}', [ApiFirestoreController::class, 'show']);
    Route::get('/delete/{id}', [ApiFirestoreController::class, 'destroy']);
    Route::post('/image-upload', [ApiFirestoreController::class, 'imageUpload']);
    Route::get('search/{search}', [ApiFirestoreController::class, 'search']);
});

Route::group(['prefix' => 'vuestore'], function () {
    Route::get('view-all', [VuestoreController::class, 'index']);
    Route::post('/create', [VuestoreController::class, 'store']);
    Route::post('/fileUpload', [VuestoreController::class, 'fileUpload']);
    Route::post('/update/{id}', [VuestoreController::class, 'update']);
    Route::get('/view/{id}', [VuestoreController::class, 'show']);
    Route::get('/delete/{id}', [VuestoreController::class, 'destroy']);
    Route::post('/image-upload', [VuestoreController::class, 'imageUpload']);
    Route::get('search/{search}', [VuestoreController::class, 'search']);
});
