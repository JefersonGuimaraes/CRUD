<?php

namespace App\Session;

class Login{

    /**
     * Método responsável por iniciar a sessão
     */
    private static function init(){
        // VERIFICA SE A SESSÃO ESTÁ ATIVA
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    /**
     * Método responsável por logar o usuário
     *
     * @param Usuario $obUsuariovoid
     */
    public static function login($obUsuario){
        // INICIA A SESSÃO
        self::init();

        $_SESSION['usuario'] = [
            'id'    => $obUsuario->id,
            'nome'  => $obUsuario->nome,
            'email' => $obUsuario->email
        ];

        echo "<script> location.href='index.php'</script>";
    }

    /**
     * Método responsável por verificar se o usuário está logado
     * @return boolean
     */
    public static function isLogged(){
        // INICIA A SESSÃO
        self::init();

        // VALIDAÇÃO DA SESSÃO 
        return isset($_SESSION["usuario"]["id"]);
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

    /**
     * Método responsável por fazer logout do usuáriovoid
     */
    public static function logout(){
        // INICIA A SESSION
        self::init();

        // DELETA A SESSION USUÁRIO
        unset($_SESSION["usuario"]);

        // REDIRECIONA PARA TELA DE LOGIN
        echo "<script>location.href='login.php'</script>";
    }

}