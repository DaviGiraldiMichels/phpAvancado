<?php
/**
 *Em php, funcções anônimas são conhecidas como "funcções anônimas" ou "clousures". uma 
 */

/**
 *EXEMPLO 1
 */
$mensagem = "olá, ";

$funcaoAnonima = function($nome) use ($mensagem){
    echo $mensagem.$nome;
};

// usando a função

$funcaoAnonima("Davi");

/**
 *EXEMPLO 2
 */

function criarContador(){
    $contador=0;
    //closure
    $funcaoContadora = function() use (&$contador){
        $contador++;
        echo "contagem: ".$contador."<br>";
    };

    return $funcaoContadora;
}

//usando
$contadora = criarContador();

$contadora();
$contadora();
$contadora();
$contadora();

/**
 * EXEMPLO 3
*/
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$numerosPares = array_filter($numeros, function($numero){
    return $numero %2== 0;
});

$numerosDobrados = array_map(function($numero){
    return $numero * 2;
}, $numerosPares);

echo "<pre>";
print_r($numerosPares);
print_r($numerosDobrados);
echo "</pre>";

/**
 * EXEMPLO 4
 */
$soma = function($a, $b){
    return $a + $b;
};

echo $soma(44, 66);
echo "<br>";


/**
 * EXERCICIO DE CALCULAR MEDIA 
 */

$notas = [10, 5, 3, 7, 7];

$media = function($array){
    return array_sum($array) / count($array);
};

echo $media($notas);