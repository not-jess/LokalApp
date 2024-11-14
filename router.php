<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controller/beranda.php',
    '/daftar' => 'controller/daftar.php',
    '/masuk' => 'controller/masuk.php',
    '/permainan' => 'controller/permainan.php',
    '/aplikasi' => 'controller/aplikasi.php',
    '/detail-aplikasi' => 'controller/detail-aplikasi.php',
];

function routeToController($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require_once($routes[$uri]);
    } else {
        abort(404);
    }
}

function abort($code = 404) {
    http_response_code($code);
    require_once('views/404.view.php');
    exit();
}

routeToController($uri, $routes);