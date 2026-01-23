<?php
$caminhoArquivo = __DIR__ . "/filme.json"; // __DIR__ retorna o diretório do arquivo atual
$conteudoArquivoFilme = file_get_contents($caminhoArquivo); // lê o conteúdo de um arquivo
$filme = json_decode($conteudoArquivoFilme, true); // converte uma string no formato JSON em um array associativo

var_dump($filme);
print_r($filme);