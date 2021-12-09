<?php
session_start();
require 'vendor/autoload.php';

use App\Framework\Router\Router;

$router = new Router();
$router->getController();



