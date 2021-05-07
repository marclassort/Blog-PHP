<?php

namespace App\Controller;

use Core\BaseController;

class ErrorController extends BaseController
{

    public function Show($exception)
    {
        $this->addParam("exception", $exception);
        return $this->render('errors', "404.html.twig", []);
    }

}