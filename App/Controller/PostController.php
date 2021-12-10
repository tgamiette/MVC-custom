<?php

namespace App\Controller;

use App\Framework\Database\PDOFactory;
use App\Manager\PostManager;
use App\Entity\Post;

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
        var_dump($_FILES);die();
        $this->render('Test.php', [],"TEST");
    }

    public function getNewPost($params) {
        if (empty($params['id'])) {
            $this->render('404.php', ['msg' => "Il manque peut être l'id de l'auteur dans l'url"], "Page non trouvé");
        } 
        else {
            $this->render('post.php', [], "New Post");
        }
    }

    public function postNewPost($params) {
        if (empty($params['id'])) {
            return $this->render('404.php', ['msg' => "Il manque peut être l'id de l'auteur dans l'url"], "Page non trouvé");
        } 
        if (isset($_POST['content']) && isset($_POST['title'])) {
            $content = $_POST['content'];
            $title = $_POST['title'];
            $author = $params['id'];
            $publishedAt = 'now';

            $post = new Post(['content' => $content, 'title' => $title, 'author' => $author, 'publishedAt' => $publishedAt]);
            $postManager = new PostManager();
            $postManager->add($post);

            header('Location: /?p=/'); //enlever ?p= et &id= quand htaccess est activé  
            exit();
        }

    }


}