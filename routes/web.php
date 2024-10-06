<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Theme\Create;
use App\Livewire\Theme\Edit;
use App\Livewire\Theme\Index;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Theme
Route::get('/themes', Index::class)->middleware(['auth'])->name('themes');
Route::get('/themes/create', Create::class)->middleware(['auth'])->name('themes.create');
Route::get('themes/{theme}/edit', Edit::class)->middleware(['auth'])->name('themes.edit');


Auth::routes();
