<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Vaga');

use \App\Entity\Vaga;

//VALIDAÇÃO DE POST
if (isset($_POST['tTitulo'], $_POST['tDescricao'], $_POST['tStatus'])) {

    $Vaga = new Vaga;
    $Vaga->titulo    = $_POST['tTitulo'];
    $Vaga->descricao = $_POST['tDescricao'];
    $Vaga->ativo     = $_POST['tStatus'];
    if($Vaga->cadastrar()){

        $_SESSION['success'] = "Ação concluída";
        echo "<script>location.href='index.php'</script>";
    }
}


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
