<?php
    use \App\Session\Login;

    
    //DETALHES DO USUÁRIO
    $usuario = $_SESSION["usuario"] ? "Olá, ".$_SESSION["usuario"]["nome"]." <a href='logout.php' class='text-light font-weight-bold ms-2'>Sair</a>" : "Visitante <a href='login.php' class='text-light font-weight-bold ms-2'>Entrar</a>";

?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>CRUD com PHP OO e MySQL</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-light">
        
        <div class="container" style="max-width: 900px; padding-bottom: 100px">
            <div class="jumbotron mx-auto text-center" style="background-color: #31AFB4; padding: 40px">
                <h1>CRUD PHP</h1>
                <p>Exemplo de CRUD com PHP Orientado a Objetos</p>

                <hr class="border-light">

                <div class="d-flex justify-content-start">
                    <?=$usuario?>
                </div>
            </div>

