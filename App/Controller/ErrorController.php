<?php

namespace App\Controller;

class ErrorController extends BaseController {

    public function getNoRoute()
    {
        $this->render("404.php",[],"Page non trouvé");
    }
}