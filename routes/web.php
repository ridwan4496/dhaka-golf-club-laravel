<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

Route::get('add_member',[AdminController::class, 'add_member'])->middleware(['auth','admin']);

Route::post('upload_member',[AdminController::class, 'upload_member'])->middleware(['auth','admin']);

Route::get('view_members',[AdminController::class, 'view_members'])->middleware(['auth','admin']);

Route::get('delete_product/{id}',[AdminController::class, 'delete_product'])->middleware(['auth','admin']);