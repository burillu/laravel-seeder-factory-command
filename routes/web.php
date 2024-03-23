<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::resource('products', ProductController::class)->parameters([
    'products' => 'product:name'
])->except('index','create','edit','store');;
//Route::get('/products/{$id}', [ProductController::class, 'show'])->name('products.show');
