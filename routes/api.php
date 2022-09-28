<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* ROUTE HOTEL */
Route::post('/hotel', [ App\Http\Controllers\api\HotelController::class, 'store']);
Route::get('/hotel', [ App\Http\Controllers\api\HotelController::class, 'index']);
Route::get('/hotel/{hotel}', [ App\Http\Controllers\api\HotelController::class, 'show']);
Route::put('/hotel/{hotel}', [ App\Http\Controllers\api\HotelController::class, 'update']);

/* ROUTE ROOM */
Route::post('/room', [ App\Http\Controllers\api\RoomController::class, 'store']);

