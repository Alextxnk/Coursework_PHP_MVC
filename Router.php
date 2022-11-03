<?php

class Router {

    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function show($uri)
    {
        //var_dump($this->routes);
        //var_dump($uri);
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
    }
}

