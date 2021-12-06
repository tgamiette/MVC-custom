<?php

namespace App\Controller;

use App\Manager\PostManager;

class PostController extends BaseController
{
    private \PDO $postManager;

    public function __construct() { }

    /**
     * Show all post
     */
    public function executeIndex()
    {
        $postManager = new PostManager();
        $posts = $postManager->getAllPosts();
        $this->render('Home.php', $posts, "Ici sont affiché les posts");
    }

}