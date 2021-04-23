<?php

namespace App\Controller;

use Entity\User;
use Core\BaseController;

class UserController {
    public function Login()
    {
        $this->view("login");
    }

    public function Authenticate($login, $password)
    {

    }
}