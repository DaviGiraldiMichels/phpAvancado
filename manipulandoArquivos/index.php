<?php
/**
 * mas por que manipular arquivos via php?
 * a princípio, voce pode usar a manipulação de arquivos para várias coisas tais como:
 * 
 * Fazer um gerenciador de arquivos remoto;
 * Editar um arquivo .css remotamente em um sistema gerenciador de conteúco qualquer;
 * Salvar informações de acesso em arquivo de log;
 * Criar um contador para seu site;
 * 
 * Sintaxe: fopen(nomeArquivo, modo);
 *   *nome: O nome do arquivo pode conter o caminho absoluto onde você deseja criar o seu arquivo.
 * por exemplo, 'www/entra21/phpavancado/manipuladorArquivos/arquivo.txt'.
 *  *modo: O modo indica as permissões de acesso para o arquivo que foi criado. por exemplo, ele pode ser criado apenas para leitura (consulta de dados) ou para escrita e leitura.
 * as permissões estão listadas no arquivo permissoes.html
 */

/* $arquivo = 'hello.txt';
// abrir ou criar arquivo
$handle = fopen($arquivo, 'a');

if($handle){
    //escreve algo no arquivo
    fwrite($handle, 'Olá mundo'.PHP_EOL);

    //fechar arquivo
    fclose($handle);
}

//ler o arquivo
$conteudo = file_get_contents($arquivo);
echo $conteudo; */

// gerar um arquivo com lista de pessoas

$dados = [
    "Maria",
    "João",
    "José",
    "Jonas"
];

$arquivo = "pessoas.txt";
$path = __DIR__."/../arquivos/";

$handle = fopen($path.$arquivo, 'w');

if($handle){
    foreach($dados as $ln){
        fwrite($handle, $ln.PHP_EOL);
    }

    fclose($handle);
}

// ler os dados

$handle = fopen($path.$arquivo, "r");
while(!feof($handle)){
    echo fgets($handle)."<br>";
}