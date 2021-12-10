<?php

namespace App\Controller;

use App\Entity\Author;
use App\Framework\Actions\Password;
use App\Framework\Session\Flash;
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
            $id = $authorManager->passwordCheck($pwd, $mail);
            if ($id) {
                $session = new Session();
                $session->set('id', $id);
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


    public function getInscription()
    {
        $this->render('SingUp.php', [], 'Inscription');
    }
    public function postInscription()
    {
        $flash= new Flash();
        $pass= new Password();
        $authormanager= new AuthorManager();
        $author= new Author($_POST);
        $author->setAdmin(0);
        $author->setPassword($pass->hash($author->getPassword()));
        $result= $authormanager->add($author);
        if ($result)
            $flash->setFlash("Inscription réussi");
            header("Location: /");
    }

}