<?php

class BDD
{
    private $bdd;

    public function __construct($config)
    {
        $this->bdd = new PDO('mysql:dbname=' . $config->database->dbname . ';host=' . $config->database->host,
            $config->database->user,
            $config->database->password);
    }

    public function getBdd()
    {
        return $this->bdd;
    }
}