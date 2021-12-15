<?php

use App\Models\DataPengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPenggunaController;
use App\Http\Controllers\GetIdController;

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

Route::get('pengguna',[DataPenggunaController::class,'index']);
Route::get('GetIdPengguna',[GetIdController::class,'showbyId']);
Route::post('pengguna',[DataPenggunaController::class,'create']);
Route::put('pengguna',[DataPenggunaController::class,'update']);
Route::delete('pengguna',[DataPenggunaController::class,'delete']);
