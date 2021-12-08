<?php

namespace App\Entity;

use App\Entity\BaseEntity;
use App\Manager\AuthorManager;
use DateTime;
use Exception;


class Post extends BaseEntity implements \JsonSerializable
{
    private int $id;
    private string $content;
    private string $title;
    private Author $author;
    private \DateTime $publishedAt;

    /**
     * @return string
     */
    public function getPublishedAt(): string
    {
        return $this->publishedAt->format('Y-m-d H:i:s');
    }

    /**
     * @param string $publishedAt
     * @throws Exception
     */
    public function setPublishedAt(string $publishedAt): void
    {
        $this->publishedAt = new DateTime($publishedAt);
    }

    public function setPublishedAtObject(DateTime $publishedAt): void
    {
        $this->publishedAt = $publishedAt;
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

    public function jsonSerialize()
    {
        return [
            'title' => $this->getTitle(),
            'content' => $this->getContent(),
            'author' => $this->getAuthor(),

        ];
    }

    /**
     * @return Author
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }

    /**
     * @param Author $author
     */
    public function setAuthor(int $author): void
    {
        $this->author = (new AuthorManager())->findById($author);
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