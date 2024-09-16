<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;
use Controllers\PaginasController;
use Controllers\VendedorController;
use Controllers\PropiedadController;


$router = new Router();

// Zona Publica
$router->get("/", [PaginasController::class, "index"]);



$router->comprobarRutas();