<?php 

class Comment 
{
    private $id;
    private $username;
    private $content;
    private $creationDate;
    private $isValid;

    public function __construct($newCreationDate) 
    {
        $this->creationDate = new \DateTime();
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setIsValid(bool $isValid): void
    {
        $this->isValid = $isValid;
    }

    public function getIsValid(): bool
    {
        return $this->isValid;
    }
}