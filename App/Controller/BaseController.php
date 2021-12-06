<?php

namespace App\Controller;

class BaseController
{
    protected $params;
    protected $templateFile = "./../View.template.php";
    protected $viewDIR = __DIR__."./../Views/Frontend/";

    public function __construct(string $action, array $params = [])
    {
        $this->params = $params;

        $method = 'execute' . ucfirst($action);
        if (!is_callable([$this, $method])) {
            throw new \RuntimeException('L\'action "' . $method . '"n\'est pas définie sur ce module');
        }
        $this->$method();
    }

    public function render(string $template, array $arguments, string $title)
    {
//        $view = $this->.$this->viewDIR.$template;

//        foreach ($arguments as $key => $value) {
////            ${key} = $value;
//        }
        ob_start();
//        require $view;
        $content = ob_get_clean();
        require $this->templateFile;
        exit;
    }
}