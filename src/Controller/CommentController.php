<?php

namespace App\Controller;

use Core\BaseController;

class CommentController extends BaseController
{

    public function comment() {
        return $this->render('frontend', 'comment.html.twig', []);
    }
    
}