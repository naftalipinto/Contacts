<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/criar', [ContactController::class, 'create'])->name('contact.create');
Route::post('/criar', [ContactController::class, 'store'])->name('contact.store');
Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('contact.show');
Route::put('/edit/{id}', [ContactController::class, 'update'])->name('contact.show');
