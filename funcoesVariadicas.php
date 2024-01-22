<?php
//EXEMPLO 1

function soma(...$numeros){
    $resultado = 0;
    foreach($numeros as $numero){
        $resultado += $numero;
    }
    return $resultado;
};

//usando

echo soma(10, 20, 30, 40);

//EXEMPLO 2
function exemplo2($arg1, $arg2, ...$resto){
    echo $arg1."<br>";
    echo $arg2."<br>";
    foreach($resto as $r){
        echo $r."<br>";
    }
}
//usando
exemplo2("Diego", "Davi", "carne", "Cerveja", "Torresmo");

//EXEMPLO 3 - parametros nomeados 

function nomeados(...$params){
    foreach($params as $chave => $valor){
        echo "{$chave}: {$valor} ,<br>";
    }
}
//usando
nomeados(Diego: 38, Maria: 45, Joao: 38);

//EXEMPLO 4 -MEDIA DE NOTAS

function calculaMedia($aluno, ...$notas){
    echo "Aluno: {$aluno} <br>";
    echo "Média: ".array_sum($notas) / count($notas)."<br>";
}

calculaMedia("Davi", 10, 2, 5, 8);

function numeros(...$numeros){
    echo "O maior número que você digitou foi: ".max($numeros)."<br>";
    echo "O menor número que você digitou foi: ".min($numeros)."<br>";
}

numeros(1,10, 5, 86, 97, 14);