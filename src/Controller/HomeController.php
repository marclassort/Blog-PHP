<?php

namespace App\Controller;

use Core\BaseController;

class HomeController extends BaseController 
{

    public function home() 
    {
        $string = "Ceci est une belle variable";
        $this->render('frontend', "home.html.twig", [
            "string" => $string
        ]);
    }

}