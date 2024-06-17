<?php 

spl_autoload_register(function(string $nomeCompletoDaClasse){
    $caminhoArquivo = str_replace('Remi\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', '/', $caminhoArquivo);
    $caminhoArquivo.= '.php';
    
    // echo $caminhoArquivo;
    // exit();
    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});

