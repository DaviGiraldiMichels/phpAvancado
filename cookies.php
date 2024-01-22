<?php
// cookies sai utilizados para armazenar informações entre as requisições do usuário, oservidor envia e o navegador armazena

// sintaxe criação setcookie(nome, valor, duração, caminho)

// criando um cookie com uma hora de validade
setCookie('usuario', 'Davi', time() + 3600, '/');

// ler um cookie
echo $_COOKIE['usuario'];

//remover um cookie
setcookie('usuario', '', time() - 3600, '/');