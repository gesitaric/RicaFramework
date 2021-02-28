<?php

namespace Engine\Models;

interface iHttpMethods {
    public static function get(string $path, string $controller, $action);
    public static function post(string $path, string $controller, $action);
    public static function put(string $path, string $controller, $action);
    public static function patch(string $path, string $controller, $action);
    public static function delete(string $path, string $controller, $action);
}

class Route implements iHttpMethods {

    public function __construct(public string $path, public string $controller, public $action) {}
    
    private static function instantiate(string $path, string $controller, $action): self {
        return new self($path, $controller, $action);
    }

    public static function get(string $path, string $controller, $action) {
        return self::instantiate(path: $path, controller: $controller, action: $action);
    }

    public static function post(string $path, string $controller, $action) {
        return self::instantiate(path: $path, controller: $controller, action: $action);
    }

    public static function put(string $path, string $controller, $action) {
        return self::instantiate(path: $path, controller: $controller, action: $action);
    }
    
    public static function patch(string $path, string $controller, $action) {
        return self::instantiate(path: $path, controller: $controller, action: $action);
    }

    public static function delete(string $path, string $controller, $action) {
        return self::instantiate(path: $path, controller: $controller, action: $action);
    }

    // TODO
    public static function resource(string $path, string $controller) {

    }

    public function execute($request) {
        $controller = new $this->controller;
        return $controller->{$this->action}($request);
    }
}