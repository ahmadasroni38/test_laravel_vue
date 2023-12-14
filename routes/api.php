<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// sanctum default error route
Route::get('/login', function () {
  return response()->json(
    [
      'message' => 'Unauthenticated',
    ],
    401
  );
})->name('login');


// auth
Route::post('/auth/register', [AuthController::class,'register']);
Route::post('/auth/login', [AuthController::class,'login']);
Route::post('/auth/logout', [AuthController::class,'logout'])->middleware('auth:sanctum');

// product
// Route::middleware('auth:sanctum')->group(function() {
  Route::get('/product/list', [ProductController::class,'index']);
  Route::post('/product/create/action', [ProductController::class,'create_action']);
  Route::get('/product/detail/{id}', [ProductController::class,'detail']);
  Route::post('/product/update/action/{id}', [ProductController::class,'update_action']);
  Route::post('/product/delete/{id}', [ProductController::class,'delete_action']);
// });