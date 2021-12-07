<?php

namespace App\Controller;

use App\Manager\PostManager;

class PostController extends BaseController
{
//    private PostManager $postmanager;
//
//    public function __construct(string $action, array $params = [])
//    {
//        parent::__construct($action, $params);
//    }

    /**
     * Show all post
     */
    public function executeIndex()
    {
        $postmanager = new PostManager();
        $posts = $postmanager->findAll();
        var_dump($posts);
        $this->render('Home.php', $posts, "Les posts");
    }

    public function executePost($post_id)
    {
        $postmanager = new PostManager();
        $posts = $postmanager->findById($post_id);
        var_dump($posts);
        //        $this->render('Home.php', $posts, "Les posts");
    }

}