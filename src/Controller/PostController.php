<?php

namespace App\Controller;

use DateTime;
use Entity\Post;

class PostController {
    public function test() {
        $post = new Post(new \DateTime());
    }
}