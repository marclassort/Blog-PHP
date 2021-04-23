<?php

namespace App\Controller;

use Core\BaseController;

class ErrorController extends BaseController
{
    public function Show($exception)
    {
        $this->addParam("exception", $exception);
        $this->view("error");
    }
}