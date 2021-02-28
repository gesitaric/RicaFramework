<?php

namespace Engine\Models;

class Route {

    public function __construct(public string $path, public string $controller, public $action) {}
    
    public static function instantiate(string $path, string $controller, $action): self {
        return new self($path, $controller, $action);
    }

    public function execute($request) {
        $controller = new $this->controller;
        return $controller->{$this->action}($request);
    }
}