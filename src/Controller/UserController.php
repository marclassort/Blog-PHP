<?php

namespace App\Controller;

use Core\BaseController;

class UserController extends BaseController {

    public function login()
    {
        return $this->render('frontend', 'login.html.twig', []);
    }

    public function authenticate($login, $password)
    {
        $this->UserManager->getByMail($login, $password);
    }
    
}