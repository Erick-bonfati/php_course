<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        //return $request->query('id'); // recupera o queryparam enviado na url (MAIS RECOMENDADO QUE O INPUT)
        //return $request->input('id'); // Recupera o valor do parâmetro da URL ou um input que veio de um formulário
        //return $request->url(); // Retorna url completa da requisição
        //return $request->method(); // retorna o method que usamos pra acessar o recurso
        //return redirect('google.com'); // redireciona para qualquer rota

        //$series = Serie::all(); busca todos valores da collection

        $series = Serie::query()->orderBy('name')->get(); // busca query onde é buscado pelo nome em ordem crescente, passando o get pra recuperar o valor encontrado

        return view('series.index')->with('series', $series); // com o with, passamos a variável $series para a view series/index
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
       $nomeSerie = $request->input('nome');

       $serie = new Serie();

       $serie->name = $nomeSerie;

       $serie->save();

       return redirect('/series');
    }
}
