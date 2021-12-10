<?php

namespace App\Controller;

use App\Entity\Author;
use App\Manager\AuthorManager;
use App\Framework\Session\Session;

class AdminController extends BaseController
{
    public function getAllUsers()
    {
            $authorManager = new AuthorManager();
            $users = $authorManager->findAll();
            $this->render('UserList.php', ['users' => $users], 'Users List');
    }
    public function getEditUser($params)
    {
        $id= $params['id'];
        $authorManager = new AuthorManager();
        $user = $authorManager->findById($id);
        $this->render('editAuthor.php', ['user' => $user], 'updateUser');
    }
}