<?php

use App\Models\Wishlist;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WishlistController;

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

Route::get('/home', [HomeController::class, 'index']);

//catalog + detail
Route::get('/catalog', [CatalogController::class, 'index']);

Route::get('/catalog/{CategoryName}', [Catalogcontroller::class, 'category']);

Route::get('/catalog/show/{product:ProductSlug}', [CatalogController::class, 'show']);

// wishlist
Route::get('/wishlist', [WishlistController::class, 'index']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);



// Route::get('/', function () {
//     return view('home.index');
// });
