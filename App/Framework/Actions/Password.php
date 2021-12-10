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
        if ($password == $hash)
            return true;
        else   
            return false;
        //return password_verify($password,$hash); HASHER LES MDP EN BASE DE DONNÉE AVANT D'UTILISER CETTE LIGNE
    }
}