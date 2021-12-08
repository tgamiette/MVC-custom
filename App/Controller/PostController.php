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

    public function getPost($post_id)
    {
        if (empty($post_id)) {
            $this->render('404.php', ['msg' => "Il manque l'id dans l'url peut être"], "Page non trouvé");
        } else {
            $postmanager = new PostManager();
            $post = $postmanager->findById(12);
            $this->render('Show.php', ['post' => $post], $post->getTitle());
        }
    }

}