<?php

use App\Http\Controllers\ClientController;
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

Route::get('/', [ClientController::class, 'index'])->name('table');
Route::get('/registro', [ClientController::class, 'register'])->name('register');
Route::get('/editar/{id}', [ClientController::class, 'edit'])->name('edit');
Route::get('/search', [ClientController::class, 'search'])->name('search');


Route::post('/cliente', [ClientController::class, 'create'])->name('create');
Route::patch('/cliente/actualizar/{id}', [ClientController::class, 'update'])->name('update');
Route::delete('/cliente/eliminar/{id}', [ClientController::class, 'delete'])->name('delete');
