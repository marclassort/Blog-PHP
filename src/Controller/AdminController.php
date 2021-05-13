<?php

namespace App\Controller;

use Core\BaseController;

class AdminController extends BaseController
{

    public function admin() {
        $this->render('backend', 'adminTemplate.html.twig', []);
    }
    
}