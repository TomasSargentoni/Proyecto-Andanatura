<?php

function conectarDB(): mysqli {
    $host = $_ENV["DB_HOST"];
    $user = $_ENV["DB_USER"];
    $password = $_ENV["DB_PASS"];
    $database = $_ENV["DB_NAME"];

    $db = mysqli_connect($host, $user, $password, $database);

    $db->set_charset("utf8");

    if ($db->connect_error) {
        echo "Error no se pudo conectar";
        exit;
    } else {
        return $db;
    }
}
