<?php 

namespace Entity;

class Post
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $blurb;

    /**
     * @var mixed
     */
    private $creationDate;

    /**
     * @var mixed 
     */
    private $modifDate;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $author;

    public function __construct(int $id, string $t, string $b, mixed $cd, mixed $md, string $c, string $a) 
    {
        $this->id = $id; 
        $this->title = $t;
        $this->blurb = $b;
        $this->creationDate = $cd;
        $this->modifDate = $md;
        $this->content = $c;
        $this->author = $a;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getBlurb(): string
    {
        return $this->blurb;
    }

    /**
     * @return mixed
     */
    public function getCreationDate(): mixed
    {
        return $this->creationDate;
    }

    /**
     * @return mixed
     */
    public function getModifDate(): mixed
    {
        return $this->modifDate;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
}