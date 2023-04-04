<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Session\Login;
use \App\Entity\Usuario;

//OBRIGA O USUÁRIO A ESTAR NÃO LOGADO
Login::requireLogout();

//MENSAGENS DE ALERTA DOS FORMULÁRIOS
$alertaLogin = "";
$alertaCadastro = "";

//VALIDAÇÃO DO POST
if(isset($_POST["acao"])){
    switch ($_POST["acao"]) {
        case 'logar':
            //BUSCA USUÁRIO POR EMAIL
            $obUsuario = Usuario::getUsuarioPorEmail($_POST["tEmail"]);

            //VALIDA A INSTANCIA E A SENHA
            if((!$obUsuario instanceof Usuario) || (!password_verify($_POST["tSenha"], $obUsuario->senha))){
                $alertaLogin = "E-mail ou senha inválidos";
                break;
            }

            //LOGA USUÁRIO
            Login::login($obUsuario);

            break;
        
        case 'cadastrar':

            if(isset($_POST["tNome"], $_POST["tEmail"], $_POST["tSenha"])){

                //BUSCA USUÁRIO POR EMAIL
                $obUsuario = Usuario::getUsuarioPorEmail($_POST["tEmail"]);
                if($obUsuario instanceof Usuario){
                    $alertaCadastro = "O e-mail digitado já está em uso";
                    break;
                }

                //NOVO USUÁRIO
                $obUsuario = new Usuario;
                $obUsuario->nome = $_POST["tNome"];
                $obUsuario->email = $_POST["tEmail"];
                $obUsuario->senha = password_hash($_POST["tSenha"], PASSWORD_DEFAULT);
                $obUsuario->cadastrar();

                Login::login($obUsuario);
            }

            break;
    }
}


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario-login.php';
include __DIR__ . '/includes/footer.php';
