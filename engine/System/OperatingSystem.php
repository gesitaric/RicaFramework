<?php

namespace Engine\System;

use Engine\Constants\GlobalSettings;

use Engine\System\RouterSystem;
use Engine\System\TemplateSystem;

use Engine\Models\Request;

class OperatingSystem {
    private $globalSettings;
    private $request;
    private $routerSystem;
    private $templateSystem;

    public function __construct() {
        $this->globalSettings = new GlobalSettings();
        $this->request = new Request();
        $this->routerSystem = new RouterSystem($this->globalSettings);
        $this->templateSystem = new TemplateSystem($this->routerSystem);
    }

    public function template():mixed {
        $controllerAction = $this->routerSystem->requestCurrentPath($this->request);
        return $this->templateSystem->twig->load($controllerAction);
    }
}