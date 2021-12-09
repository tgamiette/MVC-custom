<?php

namespace App\Manager;


use App\Entity\Post;

class PostManager extends BaseManager
{

    public function findAll(): array
    {
        $query = $this->db->query("SELECT * FROM post");;
        $tab = $query->fetchAll(\PDO::FETCH_ASSOC);
        $result = [];
        foreach ($tab as $post) {
            $result[] = new Post($post);
        }

        return $result;
    }

    public function findById(int $id)
    {
        $query = $this->db->prepare('SELECT * FROM post WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch(\PDO::FETCH_ASSOC);
//        var_dump($result);
        if ($result!= false)
            return new Post($result);
        return [];
    }

    public function deleteById(int $id): bool
    {
        $query = $this->db->prepare('DELETE FROM post WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);

        return $query->execute();
    }

    public function add(Post $post): bool
    {
        $sql = "INSERT INTO `post` (`title`, `content`, `author`, publishedAt) VALUES (:title, :content, :author, :date_published);";
        $request = $this->db->prepare($sql);
        $request->bindValue(':title', $post->getTitle(), \PDO::PARAM_STR);
        $request->bindValue(':content', $post->getContent(), \PDO::PARAM_STR);
        $request->bindValue(':author', $post->getAuthor(), \PDO::PARAM_INT);
        $request->bindValue(':date_published', $post->getPublishedAt(), \PDO::PARAM_STR);

        return $request->execute();
    }

}