<?php

namespace App\Controller;

use Core\BaseController;

class PostController extends BaseController
{

    public function post() {
        $this->render('frontend', 'post.html.twig', []);
    }

    public function registerPost($form)
    {
        if ($form->isSubmitted() && $form->isValid())
        {
            
        } else 
        {
            return $this->render('errors', '404.html.twig', []);
        }
    }
    
}