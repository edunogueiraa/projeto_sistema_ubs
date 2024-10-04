<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\RecepcionistaController;

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

Route::get('/medicos/login', [MedicoController::class, 'login'])->name('medicos.login');
Route::post('/medicos/login', [MedicoController::class, 'authenticate'])->name('medicos.authenticate');
Route::get('/medicos/dashboard', [MedicoController::class, 'dashboard'])->name('medicos.dashboard'); 
Route::get('/medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
Route::post('/medicos', [MedicoController::class, 'store'])->name('medicos.store');

Route::get('recepcionistas/login', [RecepcionistaController::class, 'login'])->name('recepcionistas.login');
Route::post('recepcionistas/login', [RecepcionistaController::class, 'authenticate'])->name('recepcionistas.authenticate');
Route::get('recepcionistas/dashboard', [RecepcionistaController::class, 'dashboard'])->name('recepcionistas.dashboard');


Route::get('/notices', function () {
    return redirect('/notices');
});


require __DIR__.'/auth.php';
