<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeasonsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/series');
})->middleware(Autenticador::class);

Route::resource('/series', SeriesController::class)
    ->except('show');
//->only(['index', 'create', 'store', 'edit', 'destroy']); // aqui estamos filtrando que somente as rotas do only vão poder usar a /series

// Route::controller(SeriesController::class)->group(function () { // Cria um router controller, onde não precisamos chamar o controller a cada rota criada
//     Route::get('/series','index')->name('series.index');
//     Route::get('/series/create','create')->name('series.create');
//     Route::post('/series/salvar', 'store')->name('series.store');
//     Route::delete('/series/destroy/{serie}', 'destroy')->name('series.destroy');
// });

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');

Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('signin');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/register', [UsersController::class, 'create'])->name('users.create');
Route::post('/register', [UsersController::class, 'store'])->name('users.store');