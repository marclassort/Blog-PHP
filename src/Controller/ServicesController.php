<?php

namespace App\Controller;

use Core\BaseController;

class ServicesController extends BaseController 
{

    public function services() {
        $this->render('frontend', 'services.html.twig', []);
    }

}