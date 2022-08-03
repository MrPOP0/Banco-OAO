<?php

spl_autoload_register(function(string $nomeClasse){
    $caminho = str_replace('PPZ\\Bank', 'src', $nomeClasse);
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);
    $caminho .= '.php';

    if (file_exists($caminho)) {
        require_once $caminho;
    }
});

