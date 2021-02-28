<?php

namespace Engine\Models;

use Engine\Constants\GlobalSettings;

use Exception;

class Request {

    public $host;
    public $uri;
    
    public function __construct() {
        $this->checkResponse();
        $this->host = $_SERVER['HTTP_HOST'];
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    // Deprecated
    public function getFullUrl() {
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    // TODO: 考える
    public function checkResponse() {
        $responseCode = http_response_code();

        switch ($responseCode) {
            case 404:
                throw new Exception(GlobalSettings::NOT_FOUND);
        }
    }
}