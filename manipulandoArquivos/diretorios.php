<?php

/* if(is_dir(__DIR__."/../ar/")){
    echo "o diretório existe";
}else{
    echo "nao temos esse diretório";
    // criar o diretorio
    mkdir(__DIR__."/../teste/", 0775);

    

} */

// remover um diretório com arquivos
$caminho = __DIR__."/../arquivos/";
$arquivos = scandir($caminho);

foreach($arquivos as $arquivo){
    if($arquivo != '.' && $arquivo != '..'){
        // deleta um arquivo
        unlink($caminho.'/'.$arquivo);
    }
}
rmdir($caminho);
