<?php
// semelhantes aos cookies as sessões são utilizadas para armazenar informações, porém ficam salvas no servidor
// sempre devo ativar o gerenciador de sessoes para poder usar sessions
session_start();

// definindo uma sessão
$_SESSION['usuario'] = 'Davi';

// ler uma sessao
echo $_SESSION['usuario'];

// destruir uma sessao
unset($_SESSION['usuario']);

// destruir todas as sessões
session_destroy();