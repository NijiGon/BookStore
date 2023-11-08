<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublisherController;
use App\Models\Category;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.details');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.view');
Route::get('/publishers', [PublisherController::class, 'index'])->name('publisher');
Route::get('/publisher/{id}', [PublisherController::class, 'show'])->name('publisher.details');
Route::get('/contact', function () {
    return view('contact', ['categories' => Category::all()]);
})->name('contact');