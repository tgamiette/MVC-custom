<?php

namespace App\Entity;

use App\Manager\AuthorManager;
use App\Manager\PostManager;
use DateTime;
use Exception;

class Comment extends BaseEntity implements \JsonSerializable
{
    private int $id;
    private Author $author;
    private string $content;
    private DateTime $publishedAt;
    private $post;

    /**
     * @return DateTime
     */
    public function getPublishedAtObject(): DateTime
    {
        return $this->publishedAt;
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

    public function jsonSerialize(): array
    {
        return [
            'commentAuthor' => $this->getAuthor(),
            'post' => $this->getPost(),
            'content' => $this->getContent(),
            'publishedAt' => $this->getPublishedAt(),

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
     * @param int $author
     */
    public function setAuthor(int $author): void
    {
        $this->author = (new AuthorManager())->findById($author);
    }

    /**
     * @return Post
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param int $post
     */
    public function setPost(int $post)
    {
        return (new PostManager())->findById($post);
    }


    /**
     * @return string
     */
    public
    function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public
    function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public
    function getPublishedAt(): string
    {
        return $this->publishedAt->format('Y-m-d H:i:s');
    }

    /**
     * @param string $date_published
     * @throws Exception
     */
    public
    function setPublishedAt(string $date_published): void
    {
        $this->publishedAt = new DateTime($date_published);
    }
}