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
        $this->renderJSON($posts);
    }

    public function postPost($params)
    {
        $post = new Post($_POST);
        $id = (int)$params['id'];
        $Postmanager = new PostManager();
        $result = $Postmanager->add($post);
        if ($result) {
            $this->renderJSON("Mise a jour Ok");
        } else {
            $this->renderJSON("Mise a jour KOOOOOO");
        }
    }


    public function deletePost($params)
    {
        $id = (int)$params['id'];
        $Postmanager = new PostManager();
        $commentmanager = new CommentManager();
        $result = $Postmanager->deleteById($id);
        $commentmanager->deleteByPostId($id);
        if ($result) {
            $this->renderJSON("Mise a jour Ok");
        } else {
            $this->renderJSON("Mise a jour KOOOOOO");
        }
    }


    public function putPost($params)
    {
        parse_str(file_get_contents("php://input"), $_PUT);
        $id = (int)$params['id'];

        if ($id == 0 || empty($_PUT['author']) || empty($_PUT['content']) || empty($_PUT['publishedAt']) || empty($_PUT['title'])) {
            $this->renderJSON("il manque l'id ou des paramètres");
        } else {
            $postmanager = new PostManager();
            $post = $postmanager->findById($id);

            $result = $postmanager->update($post);
            if ($result) {
                $this->renderJSON("Mise a jour Ok");
            } else {
                $this->renderJSON("Mise a jour KOOOOOO");
            }
        }
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
        $this->renderJSON($comments);
    }

    public function postComment($params)
    {
        $comment = new Comment($_POST);
        //        var_dump($comment);
        $Commentmanager = new CommentManager();
        $result = $Commentmanager->add($comment);
        if ($result) {
            $this->renderJSON("Mise a jour Ok");
        } else {
            $this->renderJSON("Mise a jour KOOOOOO");
        }
    }


    public function deleteComment($params)
    {
        $id = (int)$params['id'];
        $Commentmanager = new CommentManager();
        $result = $Commentmanager->deleteById($id);
        if ($result) {
            $this->renderJSON("Mise a jour Ok");
        } else {
            $this->renderJSON("Mise a jour KOOOOOO");
        }
    }

    public function putComment($params)
    {
        parse_str(file_get_contents("php://input"), $_PUT);
        $id = (int)$params['id'];
        $commentmanager = new CommentManager();

        if ($id == 0 || empty($_PUT['author']) || empty($_PUT['content']) || empty($_PUT['publishedAt']) || empty($_PUT['post'])) {
            $this->renderJSON("il manque l'id  ou  des paramètres");
        } else {
            $Comment = $commentmanager->findById($id);
            $Comment->setPost($_PUT['post']);
            $Comment->setAuthor($_PUT['author']);
            $Comment->setContent($_PUT['content']);
            $Comment->setPublishedAt($_PUT['publishedAt']);

            $result = $commentmanager->update($Comment);
            if ($result) {
                $this->renderJSON("Mise a jour Ok");
            } else {
                $this->renderJSON("Mise a jour KOOOOOO");
            }
        }
    }


    //    Doit changer les paramètre qu'on lui donne uniquement '
    public function patchComment($params)
    {
        $id = (int)$params['id'];
        $Comment = new Comment($_POST);
        $commentmanager = new CommentManager();
        $result = $commentmanager->updatebyId($id, $Comment);
        $this->renderJSON($result);
    }
}