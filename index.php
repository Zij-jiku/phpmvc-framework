<?php

use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */
// autoload
require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('ROOT', __DIR__);
define('VIEWS', __DIR__ . '/views');

var_dump($_ENV['BASE_DIR']);

require_once 'routes/route.php';

SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();
