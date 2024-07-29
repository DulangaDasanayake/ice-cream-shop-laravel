<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [ProjectController::class, 'index'])->name('home');

Route::get('/single_product', function () {
    return redirect('/');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', [ProjectController::class, 'products'])->name('products');

Route::get('/single_product/{id}', [ProjectController::class, 'single_product'])->name('single_product');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::post('/add_to_cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/add_to_cart', function () {
    return redirect('/');
});

Route::post('/remove_from_cart', [CartController::class, 'remove_from_cart'])->name('remove_from_cart');
Route::get('/remove_from_cart', function () {
    return redirect('/');
});

Route::post('/edit_product_quantity', [CartController::class, 'edit_product_quantity'])->name('edit_product_quantity');
Route::get('/edit_product_quantity', function () {
    return redirect('/');
});


Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');