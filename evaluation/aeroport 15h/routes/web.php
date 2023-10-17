<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\PorteEmbarquementController;
use App\Http\Controllers\LanguageController;
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


Route::resource('terminal', TerminalController::class);
Route::resource('porte-embarquement', PorteEmbarquementController::class);
Route::get('/', [TerminalController::class,'liste'])->name('accueil');

Route::resource('/hall', HallController::class);



Route::get('/portes-embarquement/create', 'PorteEmbarquementController@create')->name('portes-embarquement.create');
Route::get('/portes-embarquement/{porte_embarquement}/edit', 'PorteEmbarquementController@edit')->name('portes-embarquement.edit');
Route::delete('/portes-embarquement/{porte_embarquement}', 'PorteEmbarquementController@destroy')->name('portes-embarquement.destroy');
Route::post('/portes-embarquement', 'PorteEmbarquementController@store')->name('portes-embarquement.store');
Route::post('/portes-embarquement/create', 'PorteEmbarquementController@create')->name('portes-embarquement.create');
  Route::get('/profile', [PorteEmbarquementController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [PorteEmbarquementController::class, 'update'])->name('profile.update');
  Route::delete('/pro<file', [PorteEmbarquementController::class, 'destroy'])->name('profile.destroy');
  Route::get('/porte-embarquement/{porteEmbarquement}/edit', 'PorteEmbarquementController@edit')->name('porte-embarquement.edit');
  Route::get('/porte-embarquement/{porteEmbarquement}', 'PorteEmbarquementController@show');

  //Route::post('/language/switch', 'LanguageController@switch')->name('language.switch');
  require __DIR__.'/auth.php';
