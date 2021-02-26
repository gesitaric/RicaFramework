<?php

namespace Engine\System;

class RouterSystem {
    public $templateDirectory;
    public $cacheDirectory;
    
    public function __construct(\Engine\Constants\GlobalSettings $globalSettings) {
        $rootPath = $_SERVER['DOCUMENT_ROOT'];
        $this->templateDirectory = $rootPath . $globalSettings::TEMPLATE_PATH;
        $this->cacheDirectory = $rootPath . $globalSettings::CACHE_PATH;
    }
}