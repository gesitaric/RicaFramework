<?php

namespace Engine\Controllers;

use Engine\Models\Request;

interface iController {
    public static function list(Request $request): string;
    public static function create(Request $request): string;
    public static function edit(Request $request): string;
    public static function show(Request $request): string;
    public static function delete(Request $request): string;
}

class Controller implements iController {

    public static function list(Request $request): string {
        return 'welcome.html.twig';
    }

    public static function create(Request $request): string {
        return '';
    }

    public static function edit(Request $request): string {
        return '';
    }

    public static function show(Request $request): string {
        return '';
    }

    public static function delete(Request $request): string {
        return '';
    }
}