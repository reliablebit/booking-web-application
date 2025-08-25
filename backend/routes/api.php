<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MerchantAuthController;
use App\Http\Controllers\MerchantListingController;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::post('users/register', [AuthController::class, 'register']);
Route::post('users/login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:api']], function () {
    Route::get('users/me', [AuthController::class, 'me']);
    Route::post('users/logout', [AuthController::class, 'logout']);
});

Route::middleware(['auth:api', 'role:user'])->group(function () {
    Route::get('/search', [ListingController::class, 'search']);
    Route::post('/bookings', [BookingController::class, 'store']);
    Route::get('/bookings/{id}', [BookingController::class, 'show']);
});


// Merchant Auth
Route::post('/merchant/register', [MerchantAuthController::class, 'register']);

// Merchant Protected APIs
Route::middleware(['auth:api', 'role:merchant'])->prefix('merchant')->group(function () {
    Route::post('/listings', [MerchantListingController::class, 'store']);
    Route::get('/bookings', [MerchantListingController::class, 'bookings']);
    Route::get('/stats', [MerchantListingController::class, 'stats']);
});
