<?php
// controla a diretva de erros do PHP
// E_ALL - exibe todos os erros
// E_ERROR - exibe apenas erros do PHP
// E_PARSE - exibe erros de parse
// E_NOTICE - exibe as notificações de alerta (não é um erro de fato)
// E_WARNING - exibe as notificações de alerta (não é um erro de fato)
// $ ~ - exeto
error_reporting(E_ALL );


// usando try para tratar erros
/* 
try{
    // codigo que pode gerar um erro
    $resultado = 10 / 0;
} catch(ERROR $e){
    // mostra o erro gerado
    echo "Erro: ".$e->getMessage();
}finally{
    // executa o codigo mesmo com erro
} */

try{
    $pdo = new PDO('mysql:host=localhost;dbname=entra21', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Erro na conexão ao banco.";
}

// criar classe de tratamento de erros
class MinhaExcessao extends Exception{

    public function errorMessage(){
        return "Erro tratado pela classe".$this->errorMessage();
    }
}


// usando a classe de erro

function dividir($v1, $v2){
    if($v2 == 0){
        throw new MinhaExcessao("Divisão por zero não é permitido");
    }
}

// usando o tratamento

try{
    echo dividir(100, 0);
}catch(MinhaExcessao $e){
    $file = explode('\\', $e->getFile());
    echo "Erro ".$e->getMessage()."<br>";
    echo "
    Arquivo: {$file[count($file)-1]}<br>
    Linha: {$e->getLine()}<br>
    ";
}