<?php

namespace ScreenMatch\Calculos;

// Exceções precisam ser importadas para serem usadas.
use ArgumentCountError; 
use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel as AvaliavelTrait; // Importando a interface Avaliavel com namespace e alterando o nome

class ConversorNotaEstrela
{
    public function converte( AvaliavelTrait $avaliavel): float
    {
        try {
            $nota = $avaliavel->media();
            //Realiza a conversão da nota para o sistema de estrelas (1 a 5)
            return round($nota) / 2; // Supondo que a nota máxima seja 10, dividimos por 2 para converter para o sistema de estrelas
        } catch(DivisionByZeroError | ArgumentCountError) {
            return 0; // Retorna 0 estrelas se não houver avaliações para evitar a divisão por zero
        }
    }
}