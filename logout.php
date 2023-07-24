<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Session\Login;

//OBRIGA O USUÁRIO A ESTAR NÃO LOGADO
Login::logout();
