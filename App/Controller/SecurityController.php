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


    public function getCheckCnx(array $params) {

        $mail = $params['mail'];
        $pwd = $params['pwd'];
        $cnxManager = new CnxManager();
        if ($cnxManager->passwordCheck($pwd, $mail)) {
            $postController = new PostController('Index', []);
        }
        else
            $this->render('SingIn.php', [], 'Connexion');
    }
    

}