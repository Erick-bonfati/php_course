<?php

// OQUE É UM PSR?

// PSR é um acrônimo para "PHP Standard Recommendation" (Recomendação de Padrão PHP). Ele é um conjunto de diretrizes e padrões para escrever código PHP de forma consistente e interoperável. O objetivo do PSR é promover a padronização e a compatibilidade entre bibliotecas, frameworks e projetos PHP, facilitando a colaboração e o compartilhamento de código entre desenvolvedores. Existem vários PSRs, cada um abordando diferentes aspectos do desenvolvimento em PHP, como autoloading, codificação, estrutura de diretórios, entre outros.

// Abaixo é um exemplo de implementação de um autoloader PSR-4, que é um dos padrões mais comuns para autoloading em PHP. Ele mapeia namespaces para diretórios, permitindo que as classes sejam carregadas automaticamente quando são usadas, sem a necessidade de incluir manualmente os arquivos.


spl_autoload_register(function (string $className) {
    $caminho = str_replace('ScreenMatch', '/src', $className) . '.php'; // Substitui o namespace "ScreenMatch" pelo diretório "src" e adiciona a extensão ".php" para formar o caminho do arquivo
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho); // Substitui as barras invertidas por barras normais para formar o caminho correto do arquivo

    $caminhoCompleto = __DIR__ . DIRECTORY_SEPARATOR . $caminho; // Concatena o diretório atual com o caminho do arquivo para obter o caminho completo
    
    if(file_exists($caminhoCompleto)) {
        require_once $caminhoCompleto; // Inclui o arquivo da classe
    } else {
        echo "Arquivo $caminhoCompleto não encontrado.\n"; 
    }

 });