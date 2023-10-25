<?php

use App\Http\Controllers\API\LandingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ServiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Auth API
Route::post('register', [UserController::class, 'register'])->name('register-user');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::post('logout', [UserController::class, 'logout'])->name('logout')->middleware('auth:sanctum');
Route::get('user', [UserController::class, 'fetch'])->name('fetch')->middleware('auth:sanctum');

Route::name('auth.')->group(function () {

    Route::middleware('auth:sanctum')->group(function () {
        
    });
});

Route::get('', [LandingControllerController::class, 'show_data']);

// product API
Route::prefix('product')->name('product.')->group(
    function () {
        Route::post('', [ProductController::class, 'create'])->name('create-product');
        Route::get('{id}', [ProductController::class, 'show'])->name('detail-product');
    }
);

// service API
Route::prefix('service')->name('service.')->group(
    function () {
        Route::post('', [ServiceController::class, 'create'])->name('create-service');
        Route::get('', [ServiceController::class, 'show'])->name('service');
        // Route::get('{id}', [ServiceController::class, 'show'])->name('detail-service');
    }
);
