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
                $session = new Session();
                $session->set('id', $mail);
                header('Location: /');
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