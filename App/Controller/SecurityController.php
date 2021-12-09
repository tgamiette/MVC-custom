<?php

namespace App\Controller;

use App\Framework\Session\Session;
use App\Manager\AuthorManager;
use App\Controller\PostController;

class SecurityController extends BaseController
{

    public function getCheckCnx()
    {
        $session = new Session();
        if ($session->get('id')) {
            header('Location: /');
        } else {
            $this->render('SingIn.php', [], 'Connexion');
        }
    }


    public function postCheckCnx()
    {
        $mail = $_POST['mail'];
        $pwd = $_POST['pwd'];
        if (isset($pwd) && isset($mail)) {
            $authorManager = new AuthorManager();
            if ($authorManager->passwordCheck($pwd, $mail)) {
                //                Manque pas le passage des identfiant de l'utilisateur dans la session ?'
                header('Location: /');
                //                return new PostController('Index', []);
            } else {
                header('Location: /singin');
            }
        }
    }

    public function getLogout()
    {
        $session = new Session();
        if ($session->get('id')) {
            $session->delete('id');
        }
        header('Location: /');
    }


}