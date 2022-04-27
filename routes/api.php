<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\EventApiController;


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



Route::get("v1/events",[EventApiController::class,'index']);
Route::get("v1/events/active-events",[EventApiController::class,'active_events']);
Route::get("v1/events/{id}",[EventApiController::class,'show']);
Route::post("v1/events",[EventApiController::class,'store']);
Route::put("v1/events/{id}",[EventApiController::class,'update']);
Route::delete("v1/events/{id}",[EventApiController::class,'delete']);
Route::patch("v1/events/{id}",[EventApiController::class,'update']);


