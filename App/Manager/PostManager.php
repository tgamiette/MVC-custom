<?php

namespace App\Manager;


use App\Entity\Post;

class PostManager extends BaseManager
{

    public function findAll(): array
    {
        $i = 0;
        $query = $this->db->query("SELECT * FROM post");;
        //        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Post.php');
        $tab = $query->fetchAll(\PDO::FETCH_ASSOC);
        foreach ($tab as $post) {
            $tab[$i] = new Post($post);
        }

        return $tab;
    }

    public function findById(int $id): Post
    {
        $query = $this->db->prepare('SELECT * FROM post WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Post');

        return new Post($query->fetch(\PDO::FETCH_ASSOC));
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