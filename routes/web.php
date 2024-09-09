<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\NoticeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
Route::get('/medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
Route::post('/medicos', [MedicoController::class, 'store'])->name('medicos.store');
Route::get('/medicos/{medico}', [MedicoController::class, 'show'])->name('medicos.show');
Route::get('/medicos/{medico}/edit', [MedicoController::class, 'edit'])->name('medicos.edit');
Route::put('/medicos/{medico}', [MedicoController::class, 'update'])->name('medicos.update');
Route::delete('/medicos/{medico}', [MedicoController::class, 'destroy'])->name('medicos.destroy');
Route::get('/', function () {
    // return view('welcome');
    return redirect('/notices');
});

Route::get('/recepcionistas', [RecepcionistaController::class, 'index'])->name('recepcionistas.index');
Route::get('/recepcionistas/create', [RecepcionistaController::class, 'create'])->name('recepcionistas.create');
Route::post('/recepcionistas', [RecepcionistaController::class, 'store'])->name('recepcionistas.store');
Route::get('/recepcionistas/{recepcionista}', [RecepcionistaController::class, 'show'])->name('recepcionistas.show');
Route::get('/recepcionistas/{recepcionista}/edit', [RecepcionistaController::class, 'edit'])->name('recepcionistas.edit');
Route::put('/recepcionistas/{recepcionista}', [RecepcionistaController::class, 'update'])->name('recepcionistas.update');
Route::delete('/recepcionistas/{recepcionista}', [RecepcionistaController::class, 'destroy'])->name('recepcionistas.destroy');

require __DIR__.'/auth.php';
