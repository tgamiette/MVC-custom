<?php

namespace App\Controller;


use App\Manager\PostManager;

class ApiController extends BaseController
{
    //$controllerClass($action, $params)
    public function getPost(int $id = null)
    {
        $postmanager = new PostManager();
        if (is_null($id)) {
            $posts = $postmanager->findAll();
        }
        $posts = $postmanager->findById($id);
    }


}