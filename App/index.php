<?php
session_start();
require 'vendor/autoload.php';

use App\Framework\Router\Router;

$router = new Router();
$router->getController();
//$arraycomment = array(
//    "author" => 3,
//    "content" => "vtf",
//    "publishedAt" => "2021-12-16 11:28:00",
//    "post" => 1,
//);
//$arrayauthor = array(
//    "lastName" => "virginie",
//    "firstName" => "vtf",
//    "password" => "test",
//    "mail" => "telrggk@gmail.com",
//    "admin" => 0,
//);
//$arraypost = array(
//    "title" => "Ceci est un vtf officiel",
//    "content" => "non c'est faux vtf",
//    "author" => "1",
//    "publishedAt" => "2021-01-16 11:30:00",
//);
//$commentmanager = new \App\Manager\CommentManager();
//$postmanager = new \App\Manager\PostManager();
//$authormanager = new \App\Manager\AuthorManager();
//$comment = new \App\Entity\Comment($arraycomment);
//$post = new \App\Entity\Post($arraypost);
//$author = new \App\Entity\Author($arrayauthor);
////$commentmanager->add($comment);
////$authormanager->add($author);
//$postmanager->add($post);
//echo "lol";
?>

