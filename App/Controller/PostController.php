<?php

namespace App\Controller;

use App\Framework\Database\PDOFactory;
use App\Manager\PostManager;

class PostController extends BaseController
{
    /**
     * Show all post
     */
    public function getIndex()
    {
        $postmanager = new PostManager();
        $posts = $postmanager->findAll();
        $this->render('Home.php', ['posts' => $posts], "Les posts");
    }

    public function getPost($params)
    {
        if (empty($params['id'])) {
            $this->render('404.php', ['msg' => "Il manque l'id dans l'url peut être"], "Page non trouvé");
        } else {
            $id = $params['id'];
            $postmanager = new PostManager();
            $post = $postmanager->findById($id);
            $this->render('Show.php', ['post' => $post], $post->getTitle());
        }
    }

    public function getTest($params)
    {

        $this->render('Test.php', [],"TEST");
    }
    public function postTest($params)
    {
        var_dump($_POST);die();
        $this->render('Test.php', [],"TEST");
    }


}