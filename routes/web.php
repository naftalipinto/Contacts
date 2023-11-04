<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PersonController;
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
//Contactos
Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/contacto/criar', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contacto/salvar', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contacto/edit/{id}', [ContactController::class, 'edit'])->name('contact.show');
Route::put('/contacto/edit/{id}', [ContactController::class, 'update'])->name('contact.show');


//Person
Route::get('/pessoa/criar', [OwnerController::class, 'create'])->name('person.create');
Route::post('/pessoa/salvar', [OwnerController::class, 'store'])->name('person.store');
Route::get('/pessoa/edit/{id}', [OwnerController::class, 'edit'])->name('person.show');
Route::put('/pessoa/edit/{id}', [OwnerController::class, 'update'])->name('person.show');
