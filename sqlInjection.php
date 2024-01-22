<?php

//sql injection são formas de inserir comandos sql por entradas no software
//$_GET
//$_POST
/**
 * COMANDOS SQL INJECTION
 * ' OR '1=1 --
 * " OR "1=1 --
 */
if(isset($_POST['usuario'])){
    $pdo = new PDO('mysql:host=localhost;dbname=entra21', 'root', '');

    //proteção sql injection pitoresca
    // $usuario = preg_replace('/[^a-zA-z0-9]/', '', $_POST['usuario']);
    // $senha = preg_replace('/[^a-zA-z0-9]/', '', $_POST['senha']);
    // echo $usuario;
    // exit;

    $login = $pdo->prepare("SELECT * from seg_usuarios where user = :usuario AND password = :senha");
    $login->bindValue(':usuario', $_POST['usuario']);
    $login->bindValue(':senha', $_POST['senha']);
    $login->execute();
    $resultado = $login->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    var_dump($resultado);
    echo "</pre>";
}