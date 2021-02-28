<?php

namespace Engine\Controllers;

use Engine\Models\Request;

interface iController {
    public static function index(Request $request): string;
    public static function create(Request $request): string;
    public static function edit(Request $request): string;
    public static function save(Request $request): string;
    public static function update(Request $request): string;
    public static function show(Request $request): string;
    public static function delete(Request $request): string;
}

class Controller implements iController {

    public static function index(Request $request): string {
        return 'welcome/list.html.twig';
    }

    public static function create(Request $request): string {
        return 'welcome/create.html.twig';
    }

    public static function edit(Request $request): string {
        return 'welcome/edit.html.twig';
    }

    public static function save(Request $request): string {
        return '';
    }

    public static function update(Request $request): string {
        return '';
    }

    public static function show(Request $request): string {
        return 'welcome/show.html.twig';
    }

    public static function delete(Request $request): string {
        return '';
    }
}