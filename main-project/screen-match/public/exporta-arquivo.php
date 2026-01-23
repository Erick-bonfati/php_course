<?php

$filme = [
    "nome" => $_POST["nome"], // acessa o valor do campo nome do formulário com o método POST
    "ano" => (int)$_POST["ano"],
    "nota" => (float)$_POST["nota"],
    "genero" => $_POST["genero"],
];

file_put_contents("filme.json", json_encode($filme)); // grava o conteúdo em um arquivo e converte o array em uma string no formato JSON

header('Location: sucesso.php?filme=' . $filme["nome"]); // redireciona para a página de sucesso passando o nome do filme como parâmetro