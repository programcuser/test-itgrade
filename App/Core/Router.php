<?php

namespace App\Core;

use App\Core\View;

class Router
{
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
       $arr = require '../' . 'App/Config/routes.php';
       foreach ($arr as $key => $val) {
            $this->add($key, $val);
       }
    }

    public function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }

        return false;
    }

    public function run()
    {
        if ($this->match()) {
            $controllerPath = 'App\Controllers\\' . ucfirst($this->params['controller']) . 'Controller';
            if (class_exists($controllerPath)) {
                $action = $this->params['action'] . 'Action';
                if (method_exists($controllerPath, $action)) {
                    $controller = new $controllerPath($this->params);
                    $controller->$action();
                } else {
                    // echo 'Action Not found: ' . $action;
                    View::errorCode(404);
                }
            } else {
                // echo 'Controller Not found: ' . $controllerPath;
                View::errorCode(404);
            }
        } else {
            // echo 'Route does not match';
            View::errorCode(404);
        }
    }
}
