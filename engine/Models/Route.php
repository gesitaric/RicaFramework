<?php

namespace Engine\Models;

class Route {

    public function __construct(public string $path, public $action) {}
    
    public static function instantiate(string $path, $action): self {
        return new self($path, $action);
    }
}