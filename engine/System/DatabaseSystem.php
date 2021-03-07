<?php

namespace Engine\System;

class DatabaseSystem {
    public function __construct(
        public string $servername,
        private string $username,
        private string $password
    ) {}

    public function establishConnection() {
        $conn = mysqli_connect($this->servername, $this->username, $this->password);

        if (!$conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

    public static function connect($servername, $username, $password) {
        $selfInstance = new self($servername, $username, $password);
        return $selfInstance->establishConnection();
    }
}