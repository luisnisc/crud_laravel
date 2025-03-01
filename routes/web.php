<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LanguageController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/app', function () {
    $projects = Project::all();
    return view('app', compact('projects'));
})->middleware(['auth', 'verified'])->name('app');

Route::resource('projects', ProjectController::class)->middleware('auth');

Route::resource('usuarios', UsuarioController::class)->middleware('auth');

Route::get('lang/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
