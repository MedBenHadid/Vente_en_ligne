<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController;

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
    Route::get('log-out', [AuthController::class, 'logOut']);


    Route::post('add-order', [OrderController::class, 'addOrder']);
    Route::ppost('update-order', [OrderController::class, 'updateOrder']);
    Route::delete('delete-order/{orderId}', [OrderController::class, 'deleteOrder']);
    Route::get('get-orders', [orderController::class, 'getOrder']);

    Route::delete('delete-panier/{panier}', [PanierController::class, 'destroy']);
    Route::post('add-panier', [PanierController::class, 'addPanier']);
    Route::post('update-panier/{panierId}', [PanierController::class, 'updatePanier']);
    Route::get('get-paniers', [PanierController::class, 'getAllPaniers']);


    Route::get('/api/products/category/{categoryId}', [ProductController::class, 'getByCategory']);
    Route::get('/api/products', [ProductController::class, 'index']);

    return $request->user();
});
Route::post('sign-in', [AuthController::class, 'signIn']);
Route::post('sign-up', [AuthController::class, 'signUp']);
