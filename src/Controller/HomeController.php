<?php

namespace App\Controller;

use Core\BaseController;

class HomeController extends BaseController 
{

    public function Home() 
    {
        $string = "Ceci est une variable";
        return $this->render('frontend', "home.html.twig", [
            "string" => $string
        ]);
    }

}