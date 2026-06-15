<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Series;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::all(); // busca query onde é buscado pelo nome em ordem crescente, passando o get pra recuperar o valor encontrado
        //$mensagemSucesso = $request->session()->pull('mensagem.sucesso');
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso); // com o with, passamos a variável $series para a view series/index
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $series = Series::create($request->all());

        for ($seasons = 1; $seasons <= $request->seasonsQty; $seasons++) {
            $quantitySeasons = $series->seasons()->create([
                'number' => $seasons
            ]);
        }

        for ($episodes = 1; $episodes <= $request->episodesPerSeason; $episodes++) {
            $quantitySeasons->episodes()->create([
                'number' => $episodes
            ]);
        }

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->name}' criada com sucesso");
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('series', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {

        $series->update($request->all());

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->name}' atualizada com sucesso");
    }

    public function destroy(Series $series)
    {
        $series->delete();

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->name}' removida com sucesso"); // o with também serve como um flash message
    }
}
