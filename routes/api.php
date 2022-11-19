<?php

use App\Http\Controllers\API\MscustomerController;
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

Route::get('mscustomers', [MscustomerController::class, 'index']);
Route::post('mscustomers/store', [MscustomerController::class, 'store']);
Route::get('mscustomers/{id}', [MscustomerController::class, 'show']);
Route::post('mscustomers/update/{id}', [MscustomerController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});