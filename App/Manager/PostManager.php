<?php

namespace App\Manager;


use App\Entity\Post;

class PostManager extends BaseManager
{

    public function findAll(): array
    {
        $query = $this->db->query("SELECT * FROM post");;
//        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Post.php');
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findById(int $id): Post
    {
        $query = $this->db->prepare('SELECT * FROM post WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Post.php');

        return $query->fetch();
    }

    public function deleteById(int $id): bool
    {
        $query = $this->db->prepare('DELETE FROM post WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        return $query->execute();
    }

    public function add(Post $post): bool
    {
        $sql = "INSERT INTO post (`title`, `content`, `author`, `date_published`) VALUES (:title, :content, :author, :date_published);";
        $request = $this->db->prepare($sql);
        $request->bindValue(':title', $post->getTitle(), \PDO::PARAM_STR);
        $request->bindValue(':content', $post->getContent(), \PDO::PARAM_STR);
        $request->bindValue(':author', $post->getAuthor()->getId(), \PDO::PARAM_INT);
        $request->bindValue(':date_published', $post->getDateTime(), \PDO::PARAM_STR);

        return $request->execute();
    }

}