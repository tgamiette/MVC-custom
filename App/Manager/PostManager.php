<?php

namespace App\Manager;

use App\Manager\BaseManager;

class PostManager extends BaseManager
{

    public function getAllPosts()
    {
        $query = $this->db->query('SELECT * FROM post');;
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Post.php');
        
        return $query->fetchAll();
    }

    public function getPostById(int $id)
    {
        $query = $this->db->prepare('SELECT * FROM post WHERE id = :id');
        $query =bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Post.php');
        
        return $query->fetch();

    }

    public function deletePost(int $id)
    {
        $query = $this->db->prepare('DELETE FROM post WHERE id = :id');
        $query =bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
    }

}