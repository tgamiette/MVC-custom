<?php

namespace App\Manager;

session_start();
use App\Framework\Actions\Password;
use App\Framework\Session\Session;

class CnxManager extends BaseManager
{
    public function mailCheck(string $mail)
    {
        $query= $this->db->prepare("SELECT id FROM author WHERE email = :mail");
        $query->bindValue(':mail', $mail, \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch();
        
        if ($data){
            return $data['id'];
        }
        
        return false;
    }

    public function passwordCheck(string $password, string $mail)
    {
        if(!$this->mailCheck($mail))
            return false;
        $id = $this->mailCheck($mail);
        $query = $this->db->prepare("SELECT password FROM author WHERE email = :mail");
        $query->bindValue(':mail', $mail, \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch();
        $passwordCheck = new Password();
        if($passwordCheck->isValidPassword($password, $data['password'])){
            $session = new Session;
            $session->set('author', $id);
            return true;
        }
        else
            return false;
    }

}


