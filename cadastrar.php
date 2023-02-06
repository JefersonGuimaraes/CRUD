<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Vaga;

//VALIDAÇÃO DE POST
if (isset($_POST['tTitulo'], $_POST['tDescricao'], $_POST['tStatus'])) {

    $Vaga = new Vaga;
    $Vaga->titulo    = $_POST['tTitulo'];
    $Vaga->descricao = $_POST['tDescricao'];
    $Vaga->ativo     = $_POST['tStatus'];

    echo "<pre>"; print_r($Vaga); echo "</pre>"; exit;
}


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
