<?php

namespace EntityManager;

use App\EntityManager\BDD as EntityManagerBDD;
use PDO;

class UserManager extends EntityManagerBDD
{

    public function __construct($datasource)
    {
        parent::__construct("user", "User", $datasource);
    }

    public function getByMail($mail, $password)
    {
        $req = $this->database->prepare("SELECT * FROM user WHERE mail=?");
        $req->execute(array($mail, $password));
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "User");
        return $req->fetch();
    }
}