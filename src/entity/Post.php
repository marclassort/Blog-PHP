<?php 

class Post
{
    private $id;
    private $title;
    private $blurb;
    private $creationDate;
    private $modifDate;
    private $content;
    private $author;

    public function __construct($newCreationDate) 
    {
        $this->creationDate = new \DateTime();
        $this->modifDate = new \DateTime();
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
    
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setBlurb(string $blurb): void
    {
        $this->blurb = $blurb;
    }

    public function getBlurb(): string
    {
        return $this->blurb;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
}