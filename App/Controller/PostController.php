<?php

namespace App\Controller;

use App\Manager\PostManager;

class PostController extends BaseController
{
    private \PDO $postManager;

//    public function __construct(string $action, array $params = [])
//    {
//        parent::__construct($action, $params);
//
//    }

    /**
     * Show all post
     */
    public function executeIndex()
    {
        $postManager = new PostManager();
        $posts = $postManager->findAll();
        $this->render('Home.php', $posts, "Ici sont affiché les posts");
    }

}