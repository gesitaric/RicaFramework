<?php

namespace Engine\Models;

class Request {

    public $host;
    public $uri;
    
    public function __construct() {
        $this->host = $_SERVER['HTTP_HOST'];
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function response(string $path, array $parameters = []): Response {
        return Response::instantiate($path, $parameters);
    }
}