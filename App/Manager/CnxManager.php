<?php

namespace App\Manager;

session_start();
use App\Framework\Actions\Password;

class CnxManager extends BaseManager
{
    public function mailCheck(string $mail)
    {
        $query= $this->db->query("SELECT id FROM author WHERE mail = :email");
        $query->bindValue(':email', $mail, \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch();

        if ($data){
            return $data;
        }
        return false;
    }

    public function passwordCheck(string $password, string $mail)
    {
        if(!$this->mailCheck($mail))
            return false;

        $id = $this->mailCheck($mail);
        $query = $this->db->query("SELECT password FROM author WHERE mail = :email");
        $query->bindValue(':email', $mail, \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch();

        $password = new Password();
        if($password->isValidPassword($password, $data)){
            $_SESSION['author'] = $id;
            return true;
        }
        else
            return false;
    }

}


