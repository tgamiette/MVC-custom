<?php

namespace App\Manager;

use App\Entity\Post;

class PostManager extends BaseManager
{

    public function findAll(): array
    {
        $sql = "SELECT * FROM post ";
        $query = $this->dbo->query($sql);
        $tab=array();
        $i=0;
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);
        foreach ($result as $post){
            $tab[$i] = new Post($post);
        }
        return $tab;
    }
}