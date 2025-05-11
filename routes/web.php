<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class)->middleware(['auth']);

Route::get('/test', function () {
    return view('test');
});
Route::get('/', [ProductController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware([
    CheckRole::class . ':admin'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return '管理員專區';
    });
});

Route::middleware(['auth', CheckRole::class . ':super'])->group(function () {
    Route::get('/super/dashboard', [SuperAdminController::class, 'dashboard'])->name('super.dashboard');
});

Route::resource('products', ProductController::class)->middleware(['auth']);


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
});