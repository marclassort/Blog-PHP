<?php

namespace App\Controller;

use Entity\User;
use Core\BaseController;

class UserController extends BaseController {

    public function Login()
    {
        $this->view("login");
    }

    public function Authenticate($login, $password)
    {
        $user = $this->UserManager->getByMail($login);
        var_dump($user);
    }
    
}