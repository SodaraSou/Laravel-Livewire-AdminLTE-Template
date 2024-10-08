<?php

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use App\Livewire\Order\OrderCreate;
use App\Livewire\Order\OrderEdit;
use App\Livewire\Order\OrderIndex;
use App\Livewire\Product\ProductCreate;
use App\Livewire\Product\ProductEdit;
use App\Livewire\Product\ProductIndex;
use App\Livewire\Theme\Create;
use App\Livewire\Theme\Edit;
use App\Livewire\Theme\Index;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
// Theme
Route::get('/themes', Index::class)->middleware(['auth'])->name('themes');
Route::get('/themes/create', Create::class)->middleware(['auth'])->name('themes.create');
Route::get('themes/{theme}/edit', Edit::class)->middleware(['auth'])->name('themes.edit');
// Product
Route::get('/products', ProductIndex::class)->middleware(['auth'])->name('products');
Route::get('/products/create', ProductCreate::class)->middleware(['auth'])->name('products.create');
Route::get('/products/{product}/edit', ProductEdit::class)->middleware(['auth'])->name('products.edit');
// Order
Route::get('/orders', OrderIndex::class)->middleware(['auth'])->name('orders');
Route::get('/orders/create', OrderCreate::class)->middleware(['auth'])->name('orders.create');
Route::get('/orders/{order}/edit', OrderEdit::class)->middleware(['auth'])->name('orders.edit');

Auth::routes();
