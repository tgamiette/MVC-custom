<?php   

namespace App\Controller;

class ErrorController extends BaseController
{


    public function getNoRoute($params)
    {
        $this->render('404.php', ['msg' => "Cette URL n'existe pas essaye autre chose"], "URL non trouvé");
    }
}