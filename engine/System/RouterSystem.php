<?php

namespace Engine\System;

use Engine\Models\Request;
use Exception;

class RouterSystem {
    public $globalSettings;
    public $templateDirectory;
    public $cacheDirectory;
    
    public function __construct(\Engine\Constants\GlobalSettings $globalSettings) {
        $rootPath = $_SERVER['DOCUMENT_ROOT'];
        $this->globalSettings = $globalSettings;
        $this->templateDirectory = $rootPath . $globalSettings::TEMPLATE_PATH;
        $this->cacheDirectory = $rootPath . $globalSettings::CACHE_PATH;
    }

    public function requestCurrentPath(Request $request): string {
        foreach ($this->globalSettings->routes() as $route) {
            if ($route->path == $request->uri) {
                return $route->execute($request);
            }
        }

        throw new Exception($this->globalSettings::UNDEFINED_ROUTE);
    }
}