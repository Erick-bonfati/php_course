<?php

declare(strict_types=1);

$path = $_SERVER['PATH_INFO'] ?? '/';
$method = $_SERVER['REQUEST_METHOD'];

if ($path === '/') {
    require_once __DIR__ . '/../listagem-videos.php';
} elseif ($path === '/enviar-video') {
    if ($method === 'GET') {
        require_once __DIR__ . '/../enviar-video.php';
    } elseif ($method === 'POST') {
        require_once __DIR__ . '/../novo-video.php';
    }
} elseif ($path === '/editar-video' ) {
     if ($method === 'GET') {
        require_once __DIR__ . '/../editar-video.php';
    } elseif ($method === 'POST') {
        require_once __DIR__ . '/../editar-video.php';
    }
} elseif ($path === '/remover-video') {
    require_once __DIR__ . '/../remover-video.php';
} elseif ($path === '/login') {
    require_once __DIR__ . '/../login.php';
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}