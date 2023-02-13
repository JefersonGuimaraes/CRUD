<?php

namespace App\Session;

class Login{

    /**
     * Método responsável por verificar se o usuário está logado
     * @return boolean
     */
    public static function isLogged(){
        return false;
    }

    /**
     * Método responsável por obrigar o usuário estar logado para acessar
     *
     */
    public static function requireLogin(){
        if(!self::isLogged()){
            echo "<script>location.href='login.php'</script>";
        }
    }

    /**
     * Método responsável por obrigar o usuário estar deslogado para acessar
     *
     */
    public static function requireLogout(){
        if(self::isLogged()){
            echo "<script>location.href='index.php'</script>";
        }
    }

}