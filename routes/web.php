<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/productos',[ProductoController::class,'index'])->name('producto.index');
Route::get('/producto/nuevo',[ProductoController::class,'create'])->name('producto.create');
Route::get('/producto/{producto}',[ProductoController::class,'show'])->name('producto.show');
Route::post('/producto/store',[ProductoController::class,'store'])->name('producto.store');
Route::delete('/producto/{producto}', [ProductoController::class,'destroy'])->name('producto.delete');
Route::get('/producto/edit/{producto}', [ProductoController::class,'edit'])->name('producto.edit');
Route::patch('/producto/{producto}', [ProductoController::class,'update'])->name('producto.update');