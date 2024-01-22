<?php
namespace login;
use PDO\Mysql;
use Uteis;

class Permissions{

    /**
     * Verificar se o usuário está logado
     * @return boolean | string caso estiver logado retorna true senão redireciona
     */
    public function isLogged(){
        if(isset($_SESSION['USUARIO'])){
            return true;
        }else{
            header("Location: http://localhost/phpAvancado/login/");
        }
    }

    /**
     * Efetua login do usuário
     * @return boolean
     */
    public function login(){
        $user = Uteis::antiinject($_POST['usuario']);
        $password = Uteis::antiinject($_POST['senha']);
        $db = new Mysql(config);
        $db->select("SELECT id, name, user FROM seg_usuarios WHERE user = '{$user}' AND password = '{$password}'");

        if($db->totalResults > 0){
            $_SESSION['USUARIO'] = $db->qrs;
            return true;
        }else{
            return false;
        }
    }
}