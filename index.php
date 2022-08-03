<?php

use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */
// autoload
require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('ROOT', __DIR__);
define('VIEWS', __DIR__ . '/views');
define('ASSET_DIR', __DIR__ . '/assets');
define('BASE_DIR', isset($_ENV['BASE_DIR']) ? $_ENV['BASE_DIR'] : '');

// http & https
if ((!empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] === 'https') ||
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
) {
    $server_request_scheme = 'https';
} else {
    $server_request_scheme = 'http';
}
define('URL', $server_request_scheme . '://' . $_SERVER['HTTP_HOST'] . '/' . BASE_DIR);
define('ASSET_URL', URL . '/assets');

require_once 'routes/route.php';
SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();
