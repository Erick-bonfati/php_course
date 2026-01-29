<?php

class ConversorNotaEstrela
{
    public function converte(Titulo $titulo): float
    {
        $nota = $titulo->media();

        //Realiza a conversão da nota para o sistema de estrelas (1 a 5)
        
        return $nota;
    }
}