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
        if ($form->isSubmit() && $form->isValid())
        {
            $this->redirect('/');
        } else 
        {
            $this->render('errors', '404.html.twig', []);
        }
    }
    
}