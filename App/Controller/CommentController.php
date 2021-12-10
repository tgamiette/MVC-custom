<?php

namespace App\Controller;

use App\Framework\Session\Session;
use App\Manager\CommentManager;

class CommentController extends BaseController
{

    public function getDeleteComment($params)
    {
        (int)$idcomment = $params['id'];
        var_dump($idcomment);
        $session = new Session();

        $commentmanager = new CommentManager();
        $author = $commentmanager->getAuthorComment($idcomment);
        var_dump($author);
        if ($session->get("id") == $author) {
            $commentmanager->deleteById($params['id']);
            header("location: /");
        }
    }
}
