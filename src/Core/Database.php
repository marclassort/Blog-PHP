<?php

namespace Core;

use PDO;

class Database
{
    private $database;
    private static $instance;

    public static function getInstance($datasource)
    {
        if (empty(self::$instance))
        {
            self::$instance = new Database($datasource);
        }
        return self::$instance->bdd;
    }
    
    private function __construct($datasource)
    {
        $this->database = new PDO('mysql:dbname=' . $datasource->dbname . ';host=' . $datasource->host,
        $datasource->user,
        $datasource->password);
    }

}