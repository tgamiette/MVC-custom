<?php

namespace App\Controller;


use App\Entity\Comment;
use App\Entity\Post;
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
        }
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($posts);
    }

    public function postPost($params)
    {
        $post = new Post($_POST);
        $id = (int)$params['id'];
        $Postmanager = new PostManager();
        $result = $Postmanager->add($post);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    }


    public function deletePost($params)
    {
        $id = (int)$params['id'];
        $Postmanager = new PostManager();
        $commentmanager = new CommentManager();
        $result = $Postmanager->deleteById($id);
        $commentmanager->deleteByPostId($id);
        $this->renderJSON($result);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    }


    public function putPost($params)
    {
        $id = (int)$params['id'];;
        $postmanager = new PostManager();
        $post = new Post($_POST);
        $result = $postmanager->update($id, $post);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
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
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($comments);
    }

    public function postComment($params)
    {
        //var_dump($_POST);
        $comment = new CommentManager();
        $id = (int)$params['id'];
        $Commentmanager = new CommentManager();
        $result = $Commentmanager->add($comment);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    }


    public function deleteComment($params)
    {
        $id = (int)$params['id'];
        $Commentmanager = new CommentManager();
        $comments = $Commentmanager->deleteById($id);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode("test");
    }


    public function updateComment($params)
    {
        $id = (int)$params['id'];
        $Comment = new Comment($_POST);
        $commentmanager = new CommentManager();
        $result = $commentmanager->updatebyId($id, $Comment);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    }

    private function renderJSON(bool $result)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode("test");
    }
}