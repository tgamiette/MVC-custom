<?php

namespace App\Controller;


use App\Manager\CommentManager;
use App\Manager\PostManager;

class ApiController extends BaseController
{
    //$controllerClass($action, $params)
    public function getPost($params)
    {
        $id = (int)$params['id'];
        $postmanager = new PostManager();
        if ($id == 0) {
            $posts = $postmanager->findAll();
        } else {
            $posts = $postmanager->findById($id);
//            var_dump($posts);
        }
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($posts);
    }

    public function getComment($params)
    {
        $id = (int)$params['id'];
        $Commentmanager = new CommentManager();
        if ($id == 0) {
            $comments = $Commentmanager->findAll();
        } else {
            $comments = $Commentmanager->findById($id);
        }
//        var_dump($comments);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($comments);
    }


}