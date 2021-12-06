<?php

namespace App\Controller;

class BaseController
{
    private $templateFile = "./../View.template.php";
    private $viewDIR = __DIR__."./../Views/Frontend/";


    public function render(string $template, array $arguments, string $title)
    {
//        $view = $this->.$this->viewDIR.$template;

        foreach ($arguments as $key => $value) {
            ${key} = $value;
        }
        ob_start();
//        require $view;
        $content = ob_get_clean();
        require $this->templateFile;
        exit;
    }
}