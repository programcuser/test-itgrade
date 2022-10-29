<?php

namespace App\Core;

class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function setLayout($layout) {
        $this->layout = $layout;
    }

    public function render($title, $vars = [])
    {
        extract($vars);
        $path = '../' . 'App/Views/' . $this->path . '.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require '../' . 'App/Views/layouts/' . $this->layout . '.php';
        } else {
            echo 'Template not found: ' . $this->path;
        }
    }

    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }

    public static function errorCode($code)
    {
        http_response_code($code);
        $path = '../' .'App/Views/errors/' . $code. '.php';
        if (file_exists($path)) {
            require $path;
        } else {
            echo 'Error page not found';
        }
        
        exit;
    }

    public function message($status, $message)
    {
        exit(json_encode([ 'status' => $status, 'message' => $message ]));
    }

    public function location($url)
    {
        exit(json_encode([ 'url' => $url]));
    }
}
