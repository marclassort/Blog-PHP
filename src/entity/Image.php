<?php 

class Image 
{
    private $url;
    private $altText;
    private $name;

    public function __construct($u, $at, $n) 
    {
        $this->url = $u;
        $this->altText = $at;
        $this->name = $n;
    }
}