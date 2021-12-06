<?php

namespace App\Entity;

use App\Framework\AbstractClass;

class Comment extends AbstractClass
{
    private int $id;
    private Author $author;
    private string  $content;
    private \DateTime $date_published;

    /**
     * @return \DateTime
     */
    public function getDatePublished(): \DateTime
    {
        return $this->date_published;
    }

    /**
     * @param \DateTime $date_published
     */
    public function setDatePublished(\DateTime $date_published): void
    {
        $this->date_published = $date_published;
    }

    /**
     * @return Post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /**
     * @param Post $post
     */
    public function setPost(Post $post): void
    {
        $this->post = $post;
    }
    private Post $post;

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
     * @return Author
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }

    /**
     * @param Author $author
     */
    public function setAuthor(Author $author): void
    {
        $this->author = $author;
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