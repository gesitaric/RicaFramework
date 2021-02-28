<?php

require_once "vendor/autoload.php";

try {
    $operatingSystem = new \Engine\System\OperatingSystem(request: new Engine\Models\Request());
    echo $operatingSystem->template()->render();
} catch(Throwable $e) {
    echo $e->getMessage();
}