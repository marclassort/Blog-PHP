<?php

namespace App\Controller;

use Core\BaseController;

class PostController extends BaseController
{

    public function post() {
        return $this->render('frontend', 'post.html.twig', []);
    }

    public function registerPost($form)
    {
        if ($form->isSubmitted() && $form->isValid())
        {
            return $this->render('backend', 'adminTemplate.html.twig', []);
        } else 
        {
            return $this->render('errors', '404.html.twig', []);
        }
    }
    
}