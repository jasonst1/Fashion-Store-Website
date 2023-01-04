<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishlistController;
use App\Models\Wishlist;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/catalog', [CatalogController::class, 'index']);

Route::get('/catalog/{CategoryName}', [Catalogcontroller::class, 'category']);

Route::get('/catalog/show/{product:ProductSlug}', [CatalogController::class, 'show']);

Route::get('/wishlist', [WishlistController::class, 'index']);



// Route::get('/', function () {
//     return view('home.index');
// });
