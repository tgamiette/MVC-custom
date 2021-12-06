<?php

namespace App\Controller;

//require 'vendor/autoload.php';

use App\entity;
use App\Entity\Authors;
use App\Framework;
use App\Manager\PostManager;

class PostController extends BaseController
{
    private \PDO $postmanager;

    public function __construct() { }

    /**
     * Show all post
     */
    public function executeIndex()
    {
        $postManager = new PostManager(Framework\PDOFactory::getMysqlConnection());
        $posts = $postManager->getAllPost();
        $this->render('Home.php',
                      [
                          'post' => $posts,
                          'user' => new Authors(),
                          'test' => "je sui un test",
                      ],
                      "Ceci es un titre"
        );
    }
}