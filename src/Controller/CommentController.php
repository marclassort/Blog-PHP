<?php

namespace App\Controller;

use Entity\Comment;

class CommentController {
    public function test() {
        $comment = new Comment(new \DateTime());
    }
}