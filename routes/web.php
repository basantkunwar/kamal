<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// category route
route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
route::post('admin/category', [CategoryController::class, 'store'])->name('admin.category.store');
route::get('admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
route::PUT('admin/category/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
route::delete('admin/category/{category}', [CategoryController::class, 'delete'])->name('admin.category.destroy');
route::get('admin/category/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');

//brand route
route::get('admin/brand/create', [BrandController::class, 'create'])->name('admin.brand.create');
route::post('admin/brand', [BrandController::class, 'store'])->name('admin.brand.store');
route::get('admin/brand', [BrandController::class, 'index'])->name('admin.brand.index');
route::PUT('admin/brand/{brand}', [BrandController::class, 'update'])->name('admin.brand.update');
route::delete('admin/brand/{brand}', [BrandController::class, 'delete'])->name('admin.brand.destroy');
route::get('admin/brand/{brand}/edit', [BrandController::class, 'edit'])->name('admin.brand.edit');

require __DIR__.'/auth.php';
