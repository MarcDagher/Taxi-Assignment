<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\RatingsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\RidesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/signup', [UsersController::class, 'createUser']); // for testing (marc)
Route::post('/delete', [UsersController::class, 'deleteUser']); // for testing (marc)
Route::post('/update', [UsersController::class, 'updateUser']); // for testing (marc)
Route::post('/read', [UsersController::class, 'displayUser']); // for testing (marc)

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});


Route::controller(DriversController::class)->group(function () {
    Route::post('/createDriver','createDriver');
    Route::post('/readDriver','readDriver');
    Route::post('/updateDriverStatus','updateDriverStatus');
    Route::post('/deleteDriver','deleteDriver');
    Route::get('/drivers','index');
    Route::post("/loginDriver", 'loginDriver');

});

Route::controller(RatingsController::class)->group(function(){
    Route::post('addRating', 'addRating');
});


Route::controller(RidesController::class)->group(function(){
    Route::post('/request_ride', 'createRideRequest');
    Route::post('/cancel_ride', 'cancelRideRequest');
    Route::post('/accept_ride', 'acceptRideRequest');
    Route::post('/read_rides', 'readRides');
});