<?php

namespace App\Manager;

session_start();

class SingUpManager extends BaseManager
{

    #mettre verif de password dans le controller
    public function addAuthor(string $name, string $email, string $password){

        $query= $this->db->query("INSERT INTO `author` (`name`, `password`, `email`) VALUES ('$name','$password','$email')");
        $query->execute(array('name'=>$name, 'password'=>$password, 'email'=>$password));

    }



}

