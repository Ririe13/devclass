<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.index');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.view');
Route::get('/addproduct', [ProductController::class, 'addbarang'])->name('product.add');
Route::post('/storeproduct', [ProductController::class, 'store'])->name('product.store');
Route::get('/editproduct/{id}', [ProductController::class, 'editbarang'])->name('product.edit');
Route::post('/updateproduct/{id}', [ProductController::class, 'updatebarang'])->name('product.update');
Route::get('/deleteproduct/{id}', [ProductController::class, 'deletebarang'])->name('product.delete');


