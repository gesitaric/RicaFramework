<?php

namespace Engine\Constants;

use Engine\Models\Route;

use Engine\Controllers\WelcomeController;

class GlobalSettings {
    const TEMPLATE_PATH = '/view/templates/';
    const CACHE_PATH = '/cache/view/templates';

    const UNDEFINED_ROUTE = 'Current path is undefined';
    const NOT_FOUND = 'Not found';

    public function routes(): array {
        return [
            Route::get(path: '/', controller: WelcomeController::class, action: 'index'),
            Route::get(path: '/create', controller: WelcomeController::class, action: 'create'),
            Route::get(path: '/edit', controller: WelcomeController::class, action: 'edit'),
            Route::get(path: '/show', controller: WelcomeController::class, action: 'show'),
        ];
    }
}