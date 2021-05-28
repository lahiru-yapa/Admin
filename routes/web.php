<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;





Route::get('/', [HomeController::class, "index"])->name('dashboard');

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, "index"])->name('categories.all');
    Route::get('/new', [CategoryController::class, "create"])->name('categories.new');
    Route::post('/store', [CategoryController::class, "store"])->name('categories.store');
    Route::get('/{category_id}/edit', [CategoryController::class, "edit"])->name('categories.edit');
    Route::post('/{category_id}/update', [CategoryController::class, "update"])->name('categories.update');
    Route::get('/{category_id}/delete', [CategoryController::class, "delete"])->name('categories.delete');
    Route::get('/{category_id}/change/status', [CategoryController::class, "changeStatus"])->name('categories.status.change');
});

Route::prefix('items')->group(function () {
    Route::get('/', [ItemController::class, "index"])->name('item.all');
    Route::get('/new', [ItemController::class, "create"])->name('item.new');
    Route::post('/store', [ItemController::class, "store"])->name('item.store');
    Route::get('/{item_id}/edit', [ItemController::class, "edit"])->name('item.edit');
    Route::post('/{item_id}/update', [ItemController::class, "update"])->name('item.update');
    Route::get('/{item_id}/delete', [ItemController::class, "delete"])->name('item.delete');
    Route::get('/{item_id}/change/status', [ItemController::class, "changeStatus"])->name('item.status.change');
});
