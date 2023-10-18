<?php

use App\Http\Controllers\ContactsController;
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

Route::get('/', [ContactsController::class, 'index'])->name('index');
Route::get('/criar', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/criar', [ContactsController::class, 'store'])->name('contact.store');
Route::get('/edit/{id}', [ContactsController::class, 'edit'])->name('contact.show');
Route::put('/edit/{id}', [ContactsController::class, 'update'])->name('contact.show');
