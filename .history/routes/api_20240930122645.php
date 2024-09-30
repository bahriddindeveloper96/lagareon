<?php

use App\Http\Controllers\PackagingController;
use App\Http\Controllers\UnitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Route::post('/units', [UnitController::class, 'store']);
//Route::post('/packagings', [PackagingController::class, 'store']);
Route::post('/packagings', [PackagingController::class, 'store']);
Route::apiResources([
    '/units' => UnitController::class,
    //'/packagings' => PackagingController::class,
]);