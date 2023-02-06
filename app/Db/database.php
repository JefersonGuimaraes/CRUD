<?php

namespace App\Db;

use \PDO;

class Database{

    /** 
     * Host de conexão como banco de dados
     * @var string
    */
    const HOST = 'localhost';

    /**
     * Nome do banco de dados
     * @var string
     */
    const NAME = 'codx_vagas';

    /**
     * Usuário do banco
     * @var string
     */
    const USER = 'Jeferson';

    /**
     * Senha de acesso ao banco de dados
     * @var string
     */
    const PASS = 'Jeferson@1214';

    /**
     * Nome da tabela a ser manipulada
     *
     * @var string
     */
    private $table;

    /**
     * Instancia de conexão com o banco de dados
     *
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela e instacia e conexão
     *
     * @param string $table
     */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection(){

    }

}