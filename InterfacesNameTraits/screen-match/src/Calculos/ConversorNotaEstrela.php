<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Avaliavel as AvaliavelTrait; // Importando a interface Avaliavel com namespace e alterando o nome

class ConversorNotaEstrela
{
    public function converte( AvaliavelTrait $avaliavel): float
    {
        $nota = $avaliavel->media();

        //Realiza a conversão da nota para o sistema de estrelas (1 a 5)
        
        return round($nota) / 2; // Supondo que a nota máxima seja 10, dividimos por 2 para converter para o sistema de estrelas
    }
}