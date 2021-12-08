<?php

namespace App\Controller;


use App\Manager\PostManager;

class ApiController extends BaseController
{
    //$controllerClass($action, $params)
    public function getPost($params)
    {
        $id = (int)$params['id'];
        $postmanager = new PostManager();
        if ($id == 0) {
            $posts = $postmanager->findAll();
        } else {
            $posts = $postmanager->findById($id);
//            var_dump($posts);
        }
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($posts);
    }


}