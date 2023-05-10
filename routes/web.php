<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductController::class, 'index'])->name('welcome') ;
//filtre par catégories
Route::get('/filtre/{categorie}',[ProductController::class, 'index'])->name('welcome.categorie') ;
//route detail
Route::get('/detail/{product}',[ProductController::class, 'detail'])->name('welcome.detail') ;
//route ajouter au panier
Route::get('/addtocart',[ProductController::class, 'addToCart'])->name('addtocart') ;
