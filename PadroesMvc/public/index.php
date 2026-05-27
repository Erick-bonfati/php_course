<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Mvc\Controller\VideoListController;
use Alura\Mvc\Controller\VideoRemoveController;
use Alura\Mvc\Controller\VideoUpdateController;
use Alura\Mvc\Controller\VideoStoreController;
use Alura\Mvc\Controller\VideoGetForm;
use Alura\Mvc\Repository\VideoRepository;

$pdo = new PDO('mysql:host=localhost;dbname=aluratube', 'root', 'admin');

$videoRepository = new VideoRepository($pdo);

if (!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/') {
    $controller = new VideoListController($videoRepository);
    $controller->processaRequisicao();
} elseif ($_SERVER['PATH_INFO'] === '/novo-video') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $controllerGetForm = new VideoGetForm($videoRepository);
        $controllerGetForm->processaRequisicao();
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controllerStore = new VideoStoreController($videoRepository);
        $controllerStore->processaRequisicao();
    }
} elseif ($_SERVER['PATH_INFO'] === '/editar-video') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $controllerGetForm = new VideoGetForm($videoRepository);
        $controllerGetForm->processaRequisicao();
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controllerUpdate = new VideoUpdateController($videoRepository);
        $controllerUpdate->processaRequisicao();
    }
} elseif ($_SERVER['PATH_INFO'] === '/remover-video') {
    $controllerRemove = new VideoRemoveController($videoRepository);
    $controllerRemove->processaRequisicao();
} else {
    http_response_code(404);
}
