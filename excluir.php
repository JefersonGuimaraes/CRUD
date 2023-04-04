<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Vaga;
use \App\Session\Login;

//OBRIGA O USUÁRIO A ESTAR LOGADO
Login::requireLogin();

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    $_SESSION['error'] = "Houve um problema! Por favor, tente novamente";
    echo "<script>location.href='index.php'</script>";
    exit;
}

//CONSULTA VAGA
$Vaga = Vaga::getVaga($_GET["id"]);


//VALIDAÇÃO A VAGA
if(!$Vaga instanceof Vaga){
    $_SESSION['error'] = "Houve um problema! Por favor, tente novamente";
    echo "<script>location.href='index.php'</script>";
    exit;
}

//VALIDAÇÃO DE POST
if (isset($_POST['excluir'])) {

    if($Vaga->excluir()){    
        $_SESSION['success'] = "Ação concluída";
        echo "<script>location.href='index.php'</script>";
    }
}


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/confirmar-exclusao.php';
include __DIR__ . '/includes/footer.php';
