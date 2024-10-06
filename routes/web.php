<?php

use App\Http\Controllers\HomeController;
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

Auth::routes();
