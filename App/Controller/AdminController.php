<?php

namespace App\Controller;

use App\Entity\Author;
use App\Manager\AuthorManager;
use App\Framework\Session\Session;

class AdminController extends BaseController
{
    public function getAllUsers()
    {

        $session = new Session();
        if (isset($_SESSION['id'])) {
            $authorManager = new AuthorManager();
            $userIsAdmin = $authorManager->isAdmin($_SESSION['id']);
            
            if (!$userIsAdmin)
            return;

            $users = $authorManager->findAll();
            $this->render('UserList.php', ['users' => $users], 'Users List');  
        }
        else 
            return;
    }
}