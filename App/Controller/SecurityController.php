<?php

namespace App\Controller;

use App\Framework\Session\Session;
use App\Manager\AuthorManager;
use App\Controller\PostController;

class SecurityController extends BaseController {

    public function getCheckCnx() {

        $session = new Session();
        if ($session->get('id')) {
            return $postController = new PostController('Index', []);
        }
        else
            $this->render('SingIn.php', [], 'Connexion');
    }


    public function postCheckCnx() {

        $mail = $_POST['mail'];
        $pwd = $_POST['pwd'];
//        var_dump($_POST);
        if ( isset($pwd) && isset($mail)) {
            $authorManager = new AuthorManager();
            if ($authorManager->passwordCheck($pwd, $mail)) {
                header('Location: /');
                return new PostController('Index', []);
            } else {
                header('Location: singin');
//                return new SecurityController('IsSessionActive');
            }
        }
    }

    public function getLogout() {
        $session = new Session();
        if ($session->get('id')) {
            $session->delete('id');
        }
        return new PostController('Index', []);
    }
    

}