<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('name')->get(); // busca query onde é buscado pelo nome em ordem crescente, passando o get pra recuperar o valor encontrado
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

       $series = Serie::create($request->all());

       return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->name}' criada com sucesso");
    }

    public function edit(Serie $series) 
    {
       return view('series.edit')->with('series', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request) {

        $series->update($request->all());

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->name}' atualizada com sucesso");
    }

    public function destroy(Serie $series)
    {   
        $series->delete();

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->name}' removida com sucesso"); // o with também serve como um flash message
    }
}
