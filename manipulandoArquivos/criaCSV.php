<?php

$dados = [
    ["nome", "idade", "cidade"],
    ["Davi", 17, "Bombas"],
    ["Daniel Cerveja", 37, "Matupá"],
    ["Claudio", 54, "Blumenau"],
    ["João", 16, "Otacilio Costa"],
    ["Guilherme", 34, "Biguaçu"]
];

/* $handle = fopen("pessoas.csv", "w");

if($handle){
    foreach($dados as $ln){
        // a função fputcsv() adiciona automaticamente as vírgulas e lida com aspas quando necessário  
        fputcsv($handle, $ln, ";");
    }

    fclose($handle);
} */

// ler o csv

$dadosLidos = [];

if( ($handle = fopen('pessoas.csv', 'r')) !== false ){

    while(($linha = fgetcsv($handle)) !== false){
        $dadosLidos[] = explode(';', $linha[0]);
    }
    fclose($handle);
}

echo "<pre>";
print_r($dadosLidos);
echo "</pre>";