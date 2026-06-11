<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)
    ->except('show');
//->only(['index', 'create', 'store', 'edit', 'destroy']); // aqui estamos filtrando que somente as rotas do only vão poder usar a /series

// Route::controller(SeriesController::class)->group(function () { // Cria um router controller, onde não precisamos chamar o controller a cada rota criada
//     Route::get('/series','index')->name('series.index');
//     Route::get('/series/create','create')->name('series.create');
//     Route::post('/series/salvar', 'store')->name('series.store');
//     Route::delete('/series/destroy/{serie}', 'destroy')->name('series.destroy');
// });

