<?php

namespace App\Controller;

//require 'vendor/autoload.php';

use App\entity;
use App\Entity\Author;
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
        $posts = $postManager->findAll();
        $this->render('Home.php',
                      [
                          'post' => $posts,
                          'user' => new Author(),
                          'test' => "je sui un test",
                      ],
                      "Ceci es un titre"
        );
    }
}