<?php

namespace App\Entity;

use App\Framework\Actions\AbstractClass;
use App\Manager\AuthorManager;


class Post extends AbstractClass implements \JsonSerializable
{
    private int $id;
    private string $content;
    private string $title;
    private $author;
    private \DateTime $datePublished;

    /**
     * @return \DateTime
     */
    public function getDatePublished(): \DateTime
    {
        return $this->datePublished;
    }

    /**
     * @param \DateTime $datePublished
     */
    public function setDatePublished(string $datePublished): void
    {
        $this->datePublished = new \DateTime($datePublished);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    /**
     * @param \DateTime $dateTime
     */
    public function setDateTime(\DateTime $dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    public function jsonSerialize()
    {
        return [
            'author' => $this->getAuthor(),
            'title' => $this->getTitle(),
            'content' => $this->getContent(),
        ];
    }

    /**
     * @return int
     */
        public function getAuthor()
    {
//        var_dump($this->author);die();
        return $this->author;
    }


    /**
     * @return Author
     */
    public function getAuthorObjet() :Author
    {
        $authormanager=new AuthorManager();
        $author= $authormanager->findById($this->getAuthor());
        return $author;
    }

    /**
     * @param Author $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}