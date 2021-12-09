<?php

namespace App\Controller;

abstract class BaseController
{
    protected array $params;
    protected string $templateFile = __DIR__."./../Template/base.php";
    protected string $viewDIR = __DIR__."./../Template/";

    /**
     * @param string $action
     * @param array $params
     */
    public function __construct(string $action, array $params = [], $method = "get")
    {
        if ($params) {
            foreach ($params as $key => $value) {
                $this->params[$key] = $value;
            }
        } else {
            $this->params = $params;
        }

        $method = strtolower($method).ucfirst($action);
        if ( !is_callable([$this, $method])) {
            throw new \RuntimeException('L\'action "'.$method.'"n\'est pas définie sur ce module');
        }
        $this->$method($this->params);
    }

    public function render(string $template, array $args, string $title)
    {
        $view = $this->viewDIR.$template;
        foreach ($args as $key => $value) {
            ${$key} = $value;
        }
        ob_start();
        require $view;
        $body = ob_get_clean();
        require $this->templateFile;
        exit;
    }
}