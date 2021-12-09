<?php

namespace App\Manager;

session_start();

use App\Framework\Actions\Password;
use App\Framework\Session\Session;
//TODO  a mouve dans authors manager
class CnxManager extends BaseManager
{
    public function passwordCheck(string $password, string $mail): bool
    {
        if ( !$this->mailCheck($mail)) {
            return false;
        }
        $id = $this->mailCheck($mail);
        $query = $this->db->prepare("SELECT password FROM author WHERE mail = :mail");
        $query->bindValue(':mail', $mail, \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch();
        $passwordCheck = new Password();
        if ($passwordCheck->isValidPassword($password, $data['password'])) {
            $session = new Session();
            $session->set('author', $id);

            return true;
        } else {
            return false;
        }
    }

    public function mailCheck(string $mail)
    {
        $query = $this->db->prepare("SELECT id FROM author WHERE mail = :mail");
        $query->bindValue(':mail', $mail, \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch();

        if ($data) {
            return $data['id'];
        }

        return false;
    }

}


