<?php

namespace App\Controller;

use App\Framework\Session\Session;
use App\Manager\CnxManager;
use App\Controller\PostController;

class SecurityController extends BaseController {

    public function getIsSessionActive() {

        $session = new Session();
        if ($session->get('id')) {
            $postController = new PostController('Index', []);
        }
        else
            $this->render('SingIn.php', [], 'Connexion');
    }



    public function postIsSessionActive(array $params) {

        $mail = $_POST['mail'];
        $pwd = $_POST['pwd'];
//        var_dump($_POST);
        if ( isset($pwd) && isset($mail)) {
            $cnxManager = new CnxManager();
            if ($cnxManager->passwordCheck($pwd, $mail)) {
                header('Location: /');
                return new PostController('Index', []);
            } else {
                header('Location: singin');
//                return new SecurityController('IsSessionActive');
            }
        }
    }
    

}