<?php

namespace App\Controller;

use App\Framework\Session\Session;
use App\Manager\CommentManager;

class CommentController extends BaseController
{

    public function getDeleteComment($params)
    {
        $idcomment = $params['id'];
        $session = new Session();

        $commentmanager = new CommentManager();
        $author = $commentmanager->getAuthorComment($idcomment);

        if ($session->get("id") == $author) {
            $commentmanager->deleteById($params['id']);
            header("location: /");
        }
    }
}
