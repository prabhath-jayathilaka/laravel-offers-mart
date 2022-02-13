<?php

use \App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrdersController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('not-set');

Route::get('/products', function () {
    return view('pages.product');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/test', [\App\Http\Controllers\ProductController::class, 'test']);
    Route::get('/testdb', [\App\Http\Controllers\ProductController::class, 'testdb']);

    Route::get('/check-out', [CheckoutController::class, 'index'])->name('check-out');
    Route::get('/my-cart', [UserController::class, 'indexCart'])->name('my-cart');

    Route::get('/dashboard/my-info', [UserController::class, 'indexPersonalInfo'])->name('my-info');
    Route::get('/dashboard/my-address', [UserController::class, 'indexAddress'])->name('my-address');
    Route::get('/dashboard/my-orders', [UserController::class, 'indexOrders'])->name('my-orders');
    Route::get('/dashboard/my-returns', [UserController::class, 'indexReturns'])->name('my-returns');
    Route::get('/dashboard/payments', [UserController::class, 'indexTransaction'])->name('my-payments');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
