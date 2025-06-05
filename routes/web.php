<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\showController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('dashboard.login');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         // return view('dashboard.category.index');
//     })->name('/dashboard');
// });

Route::get('/', [UserController::class, 'home']);

Route::post('/login', [UserController::class, 'login'])->name('login');



Route::get('/main', [showController::class, 'index'])->name('main.index');
Route::get('/categorymalik', [showController::class, 'categorymalik'])->name('main.categorymalik');
Route::get('/allproduct', [showController::class, 'allproduct'])->name('main.allproduct');
Route::get('/details/{id}', [showController::class, 'details'])->name('main.details');
Route::get('/catalog', [showController::class, 'catalog'])->name('catalog');







Route::middleware(['auth'])->group(function () {
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/item/{id}', [CategoryController::class, 'item'])->name('category.item');


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');

//////////////
Route::get('/categories/search', [CategoryController::class, 'index'])->name('categories.search');
Route::get('/users/search', [UserController::class, 'index'])->name('users.search');
// Route::get('/item/search/{id}', [CategoryController::class, 'item'])->name('item.search');
/////////
Route::get('/item_detalis/{id}', [ItemController::class, 'detalis'])->name('item_detalis');

Route::get('/image_item/{id}', [ItemController::class, 'image_item'])->name('image_item');


Route::post('/item_photo', [ItemController::class, 'item_photo'])->name('item_photo');


// Route::get('/image_item/{id}', [ItemController::class, 'image_item'])->name('image_item');



Route::get('/item', [ItemController::class, 'index'])->name('item.index');
Route::get('/item/create/{id}', [ItemController::class, 'create'])->name('item.create');
Route::delete('/item/destroy/{id}', [ItemController::class, 'destroy'])->name('item.destroy');
Route::get('/item/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
Route::post('/item/store', [ItemController::class, 'store'])->name('item.store');
Route::put('/item/update/{id}', [ItemController::class, 'update'])->name('item.update');

});


