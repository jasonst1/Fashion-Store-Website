<?php

use App\Models\Wishlist;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\PasswordResetController;

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

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

//catalog + detail + wishlist
Route::get('/catalog', [CatalogController::class, 'index']);

Route::get('/catalog/{CategoryName}', [Catalogcontroller::class, 'category']);

Route::get('/catalog/show/{product:ProductSlug}', [CatalogController::class, 'show']);

Route::get('/wishlist', [CatalogController::class, 'wishlist']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

// logout
Route::post('/logout', [LoginController::class, 'logout']);

// forgot password
Route::get('/forgot-password', [PasswordResetController::class, 'index']);

Route::post('/forgot-password', [PasswordResetController::class, 'mailComposer']);

Route::get('/reset-password', [PasswordResetController::class, 'edit']);

Route::post('/reset-password', [PasswordResetController::class, 'update']);


// account (resource)
Route::get('/account', [AccountController::class, 'index']);

Route::post('/account', [AccountController::class, 'update']);

Route::get('/account/delete', [AccountController::class, 'destroy']);

// address (resource)
Route::resource('/account/address', AddressController::class);

// map
Route::get('/account/map', [MapController::class, 'index']);

// payment
Route::resource('/account/payment', PaymentController::class);
Route::post('/account/payment/delete', [PaymentController::class, 'destroy']);

// shopping cart
Route::get('/shoppingCart', function () {
    return view('shoppingCart.index');
});

// Route::get('/', function () {
//     return view('home.index');
// });
