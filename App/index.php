<?php

require 'vendor/autoload.php';

use App\Entity\Post;

$post = new Post();

$postmanager = new \App\Manager\PostManager();
var_dump($postmanager->findAll());