<?php

date_default_timezone_set('America/Sao_Paulo');
echo date_default_timezone_get()."<br>";
$hoje = date('d/m/Y');
echo $hoje;

//calcular datas

$dataAtual = date('d/m/Y');
$dataFutura = date('d/m/Y', strtotime('+ 100000 second'));

// echo "Hoje: {$dataAtual} Um ano: {$dataFutura}";

/* $diaAtual = date('d/m/Y');
for($parc = 0; $parc <= 36; $parc++){
    $dias = 30 * $parc;
    $parcela .= "Parcela {$parc} Venc: ".date('d/m/Y', strtotime("+ {$dias} days"))."<br>";
}

echo $parcela; */

//quantos dias faltam para determinada data
$dataInicial = strtotime(date('d-m-Y'));
$dataFinal = strtotime(date('2024-01-25'));
$quantosDias = ($dataFinal - $dataInicial) / (60 * 60 * 24);

echo "Faltam {$quantosDias} dias para o aniversário do Davi e do Daniel <br>";

//gerador de parcelas
$parcela = date('Y-m-d');

for($parc = 1;$parc <=36;$parc++){
    $parcela = date('Y-m-d', strtotime($parcela."+30 days"));
    echo "Parcela: {$parc} Vencimento:".date('d/m/Y', strtotime($parcela))." <br>";
};

