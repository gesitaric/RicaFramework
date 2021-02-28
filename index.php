<?php

require_once "vendor/autoload.php";

try {
    $operatingSystem = new \Engine\System\OperatingSystem();
    echo $operatingSystem->template()->render();
} catch(Throwable $e) {
    echo $e->getMessage();
}