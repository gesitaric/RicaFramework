<?php

namespace Engine\System;

class TemplateSystem {
    public $twig;

    public function __construct(\Engine\System\RouterSystem $routerSystem)
    {
        $loader = new \Twig\Loader\FilesystemLoader($routerSystem->templateDirectory);
        $this->twig = new \Twig\Environment($loader, [
            'cache' => $routerSystem->cacheDirectory,
        ]);
    }
}