<?php 

class Post
{
    private $title;
    private $blurb;
    private $creationDate;
    private $modifDate;
    private $content;
    private $author;

    public function __construct($t, $b, $c, $a)
    {
        $this->title = $t;
        $this->blurb = $b;
        $this->content = $c;
        $this->author = $a;
    }

    public function __construct() 
    {
        $this->creationDate = new \DateTime();
        $this->modifDate = new \DateTime();
    }

}