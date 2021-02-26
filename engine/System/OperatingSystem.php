<?php

namespace Engine\System;

use Engine\Constants\GlobalSettings;
use Engine\System\RouterSystem;
use Engine\System\TemplateSystem;

class OperatingSystem {
    private $globalSettings;
    private $routerSystem;
    private $templateSystem;

    public function __construct() {
        $this->globalSettings = new GlobalSettings();
        $this->routerSystem = new RouterSystem($this->globalSettings);
        $this->templateSystem = new TemplateSystem($this->routerSystem);
    }

    public function template() {
        $exampleController = new \Engine\Controllers\WelcomeController();
        return $this->templateSystem->twig->load($exampleController->list());
    }
}