<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        //return $request->query('id'); // recupera o queryparam enviado na url (MAIS RECOMENDADO QUE O INPUT)
        //return $request->input('id'); // Recupera o valor do parâmetro da URL ou um input que veio de um formulário
        //return $request->url(); // Retorna url completa da requisição
        //return $request->method(); // retorna o method que usamos pra acessar o recurso
        //return redirect('google.com'); // redireciona para qualquer rota
        $series = [
            'The office',
            'Peaky blinders',
            'The walking dead'
        ];

        return view('series.index')->with('series', $series); // com o with, passamos a variável $series para a view series/index
    }

    public function create(Request $request) {
        $request->input('nome');

        return view('series.create');
    }
}
