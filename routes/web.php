<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PatientController;
/**
 * Route:get Consultar
 * Route:post Guardar
 * Route:delete Eliminar
 * Route:put Actualizar 
 */


Route::controller(PageController::class)->group(function(){
    
    Route::get('/',                         'home')->name('home');
    Route::get('pacientes/{patient:id}',    'paciente')->name('paciente');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('patients', PatientController::class)->except('show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
