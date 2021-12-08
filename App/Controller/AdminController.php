<?php

namespace App\Controller;

use App\Entity\Author;
use App\Manager\AuthorManager;

class AdminController extends BaseController
{
    public function executeGetAllUsers()
    {

        $authorManager = new AuthorManager();
        $userIsAdmin = $authorManager->isAdmin();
        
        if (!userIsAdmin)
           return;

        $users = $authorManager->findAll();
        $this->render('UserList.php', ['users' => $users], 'Users List');  

    }
}