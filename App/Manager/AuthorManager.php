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
        $result = $query->fetch(\PDO::FETCH_ASSOC);
        if ($result != false) {
            return new Author($result);
        }

        return [];
    }

    public function isAdmin($id): bool
    {
        $query = $this->db->pepare('SELECT isAdmin FROM author WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();

        return $query->fetch();
    }

    public function add(Author $author): bool
    {
        $sql = "INSERT INTO author (`firstName`, `lastName`, `password`, mail,admin) VALUES (:firstname, :lastname, :password, :mail, :admin);";
        $request = $this->db->prepare($sql);
        $request->bindValue(':firstname', $author->getFirstName(), \PDO::PARAM_STR);
        $request->bindValue(':lastname', $author->getLastName(), \PDO::PARAM_STR);
        $request->bindValue(':password', $author->getPassword(), \PDO::PARAM_STR);
        $request->bindValue(':mail', $author->getMail(), \PDO::PARAM_STR);
        $request->bindValue(':admin', $author->isAdmin(), \PDO::PARAM_INT);

        return $request->execute();
    }
}