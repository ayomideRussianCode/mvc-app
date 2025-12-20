<?php


class Route{

    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function get($path, $handler) {

        $this->routes['GET'][$this->formatRoute($path)] = $handler;

    }

    public function post($path, $handler)
    {

        $this->routes['GET'][$this->formatRoute($path)] = $handler;
    }


    protected function formatRoute($route){

        return '/' . trim($route, '/');
    }

    public function dispatch(){

        $method = $_SERVER['REQUEST_METHOD'];
        $requestUrl = parse_url ($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $cleanedRequest = $this->formatRoute($requestUrl);

        foreach($this->routes[$method] as $route=>$handler){

        }

    }

}
?>