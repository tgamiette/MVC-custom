<?php

namespace App\Framework\Actions;

class Password
{
    public function hash($password)
    {
        return password_hash($password,PASSWORD_DEFAULT);
    }

    public function isValidPassword($password,$hash): bool
    {
        return password_verify($password,$hash);
    }
}