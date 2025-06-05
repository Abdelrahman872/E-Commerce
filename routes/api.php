<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\Item_imageController;
use App\Http\Controllers\Api\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/category', [CategoryController::class, 'index']);

Route::get('/item_image', [Item_imageController::class, 'index']);

Route::get('/item', [ItemController::class, 'index']);

// Route::post('/payment/store', [PaymentController::class, 'store']);
// Route::get('/payment/show/{id}', [PaymentController::class, 'show']);
// Route::put('/payment/update/{id}', [PaymentController::class, 'update']);
// Route::delete('/payment/destroy/{id}', [PaymentController::class, 'destroy']);
