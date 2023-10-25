<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ProductController;

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

// product API
Route::post('product-create', [ProductController::class, 'create'])->name('create-product');
Route::prefix('product')->name('product.')->group(
    function () {

    }
);
