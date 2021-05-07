<?php

namespace App\Controller;

use Core\BaseController;

class PrivacyController extends BaseController 
{

    public function Privacy() {
        $this->view("politique-de-confidentialite");
    }

}