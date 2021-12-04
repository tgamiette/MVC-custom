<?php

namespace App\entity;

class Post
{
    private string $description;
    private Authors $user;

    /**
     * @return Authors
     */
    public function getUser(): Authors
    {
        return $this->user;
    }

    /**
     * @param Authors $user
     */
    public function setUser(Authors $user): void
    {
        $this->user = $user;
    }


}