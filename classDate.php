<?php

$agora = new dateTime('now', new DateTimeZone('America/Sao_Paulo'));

echo $agora->format('d/m/Y H:i:s')."<br>";

//exibir o dia de ontem
$ontem = new DateTime('next week');
echo $ontem->format('d/m/Y')."<br>";

/* echo "<pre>";
var_dump($agora);
echo "</pre>"; */

//adicionar um intervalo
$agora->add(new DateInterval('P1D'));
// echo $agora->format('d/m/Y');

//diferença entre duas datas
$dataInicio = new DateTime();
$dataFinal = new DateTime('2024-01-28');

$resultado = $dataInicio->diff($dataFinal);

// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";

// echo $resultado->format('%a dias');

// exibir data por extenso 
$hoje = new DateTime();
// FULL serve para exibir a data por extenso
// NONE para não mostrar a hora
$formato = new IntlDateFormatter('pt_BR', IntlDateFormatter::FULL, IntlDateFormatter::NONE, new DateTimeZone('America/Sao_Paulo'));
echo $formato->format($hoje);

// gerador de parcelas
$parcela = new DateTime();

for($parc = 1; $parc <= 36; $parc++){
    $parcela->add(new DateInterval('P30D'));
    echo "parcela:{$parc} Vencimento: {$parcela->format('d/m/Y')}<br>";
}