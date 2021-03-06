<?php

namespace Engine\Controllers;

use Engine\Models\Request;
use Engine\Models\Response;

interface iController {
    public static function index(Request $request): Response;
    public static function create(Request $request): Response;
    public static function edit(Request $request): Response;
    public static function save(Request $request): Response;
    public static function update(Request $request): Response;
    public static function show(Request $request): Response;
    public static function delete(Request $request): Response;
}

class Controller implements iController {

    public static function index(Request $request): Response {
        return $request->response('welcome/list.html.twig');
    }

    public static function create(Request $request): Response {
        return $request->response('welcome/create.html.twig');
    }

    public static function edit(Request $request): Response {
        return $request->response('welcome/edit.html.twig');
    }

    public static function save(Request $request): Response {
        return $request->response('');
    }

    public static function update(Request $request): Response {
        return $request->response('');
    }

    public static function show(Request $request): Response {
        return $request->response('welcome/show.html.twig');
    }

    public static function delete(Request $request): Response {
        return $request->response('');
    }
}