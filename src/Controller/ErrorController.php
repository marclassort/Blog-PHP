<?php

namespace App\Controller;

use Core\BaseController;

class ErrorController extends BaseController
{

    public function show($exception)
    {
        $this->addParam("exception", $exception);
        $this->render('errors', "404.html.twig", []);
    }

}