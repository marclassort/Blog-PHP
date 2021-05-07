<?php

namespace App\Controller;

use Core\BaseController;

class ServicesController extends BaseController 
{

    public function Services() {
        $this->view("services");
    }

}