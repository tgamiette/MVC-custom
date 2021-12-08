<?php

namespace App\Controller;

use App\Framework\Database\PDOFactory;
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
    public function getIndex()
    {
        $postmanager = new PostManager();
        $posts = $postmanager->findAll();
        $this->render('Home.php', ['posts' => $posts], "Les posts");
    }

    public function getPost(int $post_id)
    {
        $postmanager = new PostManager();
        $post = $postmanager->findById($post_id);
        $this->render('Show.php', ['post' => $post], $post->getTitle());
    }

}