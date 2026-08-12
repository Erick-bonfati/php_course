<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use Illuminate\Http\Request;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Autenticador;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class SeriesController extends Controller implements HasMiddleware
{
    public function __construct(private SeriesRepository $repository)
    {  
    }

    public static function middleware(): array
    {
        return [
            (new Middleware(Autenticador::class))->except(['index']),
        ];
    }
    
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
       $series = $this->repository->add($request);

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
