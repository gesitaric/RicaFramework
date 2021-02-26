<?php

namespace Engine\Constants;

use Engine\Models\Route;

use Engine\Controllers\WelcomeController;

class GlobalSettings {
    const TEMPLATE_PATH = '/view/templates/';
    const CACHE_PATH = '/cache/view/templates';

    const UNDEFINED_ROUTE = 'Current path is undefined';

    public function routes(): array {
        return [
            Route::instantiate(path: '/index.php', action: WelcomeController::list())
        ];
    }
}