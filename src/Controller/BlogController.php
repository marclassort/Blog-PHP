<?php

namespace App\Controller;

use Core\BaseController;

class BlogController extends BaseController 
{

    public function blog() {
        $this->render('frontend', 'blog.html.twig', []);
    }

}