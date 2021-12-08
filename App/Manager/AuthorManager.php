<?php

namespace App\Manager;

use App\Entity\Author;

class AuthorManager extends BaseManager
{
    public function findAll(): array
    {
        $query = $this->db->query("SELECT * FROM author");;
        $tab = $query->fetchAll(\PDO::FETCH_ASSOC);
        $result = [];
        foreach ($tab as $author) {
            $result[] = new Author($author);
        }

        return $result;
    }

    public function findById(int $id): Author
    {
        $query = $this->db->prepare('SELECT * FROM author WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();

        return new Author($query->fetch(\PDO::FETCH_ASSOC));
    }
}