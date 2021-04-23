<?php 

namespace Entity;

class Image 
{
    private $id;
    private $url;
    private $altText;
    private $name;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setAltText(string $altText): void
    {
        $this->altText = $altText;
    }

    public function getAltText(): string
    {
        return $this->altText;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}