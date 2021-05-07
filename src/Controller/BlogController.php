<?php

namespace App\Controller;

use Core\BaseController;

class BlogController extends BaseController 
{

    public function Blog() {
        $this->view("blog");
    }

}