<?php

namespace App\Entity;

class Comments
{
    private int $id;
    private Authors $author;
    private string  $comment;
    private \DateTime $dateTime;

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
     * @return Authors
     */
    public function getAuthor(): Authors
    {
        return $this->author;
    }

    /**
     * @param Authors $author
     */
    public function setAuthor(Authors $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }


}