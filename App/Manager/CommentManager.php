<?php

namespace App\Manager;


use App\Entity\Comment;

class CommentManager extends BaseManager
{
    public function findAll(): array
    {
        $query = $this->db->query("SELECT * FROM comment");;
        //        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\comment.php');
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findById(int $id): Comment
    {
        $query = $this->db->prepare('SELECT * FROM comment WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Comment.php');

        return $query->fetch();
    }

    public function deleteById(int $id): void
    {
        $query = $this->db->prepare('DELETE FROM comment WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
    }

    public function add(comment $comment): void
    {
        $sql = "INSERT INTO comment (`author_id`, `content`, `date_published`, `post_id`) VALUES (:author_id, :content, :date_published, :post_id);";
        $request = $this->db->prepare($sql);
        $request->bindValue(':author_id', $comment->getAuthor()->getId(), \PDO::PARAM_INT);
        $request->bindValue(':content', $comment->getContent(), \PDO::PARAM_STR);
        $request->bindValue(':date_published', $comment->getDatePublished(), \PDO::PARAM_STR);
        $request->bindValue(':post_id', $comment->getPost()->getId(), \PDO::PARAM_INT);

        $request->execute();
    }

}