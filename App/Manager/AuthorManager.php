<?php

namespace App\Manager;

class AuthorManager extends BaseManager
{
    public function findAll() :array
    {

        $query = $this->db->query('SELECT * FROM author');
        $usersData = $query->fetchAll(\PDO::FETCH_ASSOC);
        $users = [];
        foreach ($usersData as $user) {
            $users[] = new Author($user);
        }

        return $users;
    }

    public function isAdmin() :bool
    {
        $query = $this->db->pepare('SELECT isAdmin FROM author WHERE id = :id');
        $query->bindValue(':id', $_SESSION('id'), \PDO::PARAM_INT);
        $query->execute();

        return $query->fetch();
    }
}