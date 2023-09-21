<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfesseurController;
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

Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::get('page/{numero_page}', [PageController::class, 'index'])->name('page_par_numero');

// Route::get('classe/{classe}/toto', [ClasseController::class, 'toto'])->name('classe.toto');
Route::resource('classe', ClasseController::class);
Route::resource('matiere', MatiereController::class);
Route::resource('professeur', ProfesseurController::class);
