<?php 

class Comment 
{
    private $username;
    private $content;
    private $creationDate;
    private $isValid;

    public function __construct($u, $c, $iv) 
    {
        $this->username = $u;
        $this->content = $c;
        $this->isValid = $iv;
    }

    public function __construct() 
    {
        $this->creationDate = new \DateTime();
    }
}