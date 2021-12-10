<?php

namespace App\Controller;

use App\Entity\Image;
use App\Framework\Database\PDOFactory;
use App\Manager\ImageManager;
use App\Manager\PostManager;
use App\Manager\CommentManager;
use App\Entity\Post;
use App\Entity\Comment;
use App\Framework\Session\Session;

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

    public function postPost($params)
    {
        if (empty($params['id'])) {
            return $this->render('404.php', ['msg' => "Il manque l'id dans l'url peut être"], "Page non trouvé");
        }
        if ($_POST['content']) {
            $content = $_POST['content'];
            $session = new Session();
            $authorId = $session->get('id');
            $postId = $params['id'];
            $publishedAt = 'now';

            $comment = new Comment([
                                       'author' => $authorId,
                                       'content' => $content,
                                       'publishedAt' => $publishedAt,
                                       'post' => $postId,
                                   ]);
            $commentManager = new CommentManager();
            $commentManager->add($comment);

            header('Location: /post/'.$params['id']);
            exit();
        }
    }

    public function getTest($params)
    {
        $this->render('Test.php', [], "TEST");
    }

    public function postTest($params)
    {
        $imagemanager = new ImageManager();
        $array = array(
            'img_nom' => $_FILES['image']['name'],
            'img_taille' => $_FILES['image']['size'],
            'img_type' => $_FILES['image']['type'],
            'img_desc' => 'image',
            'img_blob' => file_get_contents($_FILES['image']['tmp_name']),
        );
        $image = new Image($array);
        var_dump($image);
        var_dump($imagemanager->add($image));
        die();
        $this->render('Test.php', [], "TEST");
    }

    public function getNewPost($params)
    {
        if (empty($params['id'])) {
            $this->render('404.php', ['msg' => "Il manque peut être l'id de l'auteur dans l'url"], "Page non trouvé");
        } else {
            $this->render('post.php', [], "New Post");
        }
    }

    public function postNewPost($params)
    {
        if (empty($params['id'])) {
            return $this->render('404.php',
                                 ['msg' => "Il manque peut être l'id de l'auteur dans l'url"],
                                 "Page non trouvé"
            );
        }
        if (isset($_POST['content']) && isset($_POST['title'])) {
            $content = $_POST['content'];
            $title = $_POST['title'];
            $author = $params['id'];
            $publishedAt = 'now';

            $post = new Post([
                                 'content' => $content,
                                 'title' => $title,
                                 'author' => $author,
                                 'publishedAt' => $publishedAt,
                             ]);
            $postManager = new PostManager();
            $postManager->add($post);
        }


        publicfunction getDeletePost($params)
    {
    $idPost = $params['id'];
        $session = new Session();

        $Postmanager = new PostManager();
        $author = $Postmanager->getAuthorPost($idPost);

        if ($session->get("id") == $author) {
            $Postmanager->deleteById($idPost);
            header("location: /");
        }
    }
}
