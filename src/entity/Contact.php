<?php 

class Contact 
{
    private $author;
    private $creationDate;
    private $subject;
    private $content;
    private $emailAddress;
    private $isHandled;

    public function __construct($a, $s, $c, $ea, $ih)
    {
        $this->author = $a;
        $this->subject = $s;
        $this->content = $c;
        $this->emailAddress = $ea;
        $this->isHandled = $ih;
    }

    public function __construct()
    {
        $this->creationDate = new \DateTime();
    }

}