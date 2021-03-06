<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\VehicleController;
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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => 'jwt.verify'], function ($router) {
    Route::get('/vehicles', [VehicleController::class, 'all']);
    Route::get('/vehicles/{vehicle_id}', [VehicleController::class, 'fetchOne']);
    Route::put('/vehicles/{vehicle_id}', [VehicleController::class, 'update']);
    Route::get('/manufacturers/{vehicle_type_id?}', [ManufacturerController::class, 'all']);
});
