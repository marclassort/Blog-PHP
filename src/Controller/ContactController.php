<?php

namespace App\Controller;

use Core\BaseController;

class ContactController extends BaseController 
{

    public function Contact() {
        $this->view("contact");
    }

}