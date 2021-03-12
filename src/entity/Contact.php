<?php 

class Contact 
{
    private $id;
    private $author;
    private $creationDate;
    private $subject;
    private $content;
    private $emailAddress;
    private $isHandled;

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

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setEmailAddress(string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function setIsHandled(bool $isHandled): void
    {
        $this->isHandled = $isHandled;
    }

    public function getIsHandled(): bool
    {
        return $this->isHandled;
    }

}