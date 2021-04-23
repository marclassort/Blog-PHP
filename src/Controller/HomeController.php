<?php

namespace App\Controller;

use Core\BaseController;

class HomeController extends BaseController 
{

    public function Home() {
        $this->view("home");
    }

}