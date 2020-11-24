<?php

namespace App\Core;

class Router {
   
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

   
    public static function load($file) {
        $router = new static;

        require $file;

        return $router;
    }

   
    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

   
    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

   
    public function direct($uri, $requestType) {
        $data = explode('=', $uri);
        $uri = "/" . $data[0];
        if (array_key_exists($uri, $this->routes[$requestType])) {
             $controlerData = explode('/',$this->routes[$requestType][$uri]);

            return $this->callAction(
               $controlerData[0],
               $controlerData[1],
               $data[1]
            );
        }

        throw new \Exception('No route defined for this URI.');
    }

   
    protected function callAction($controller, $action, $id) {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controller->$action($id);
    }
}