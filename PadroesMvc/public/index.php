<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Mvc\Repository\VideoRepository;
use Alura\Mvc\Controller\Controller;

$pdo = new PDO('mysql:host=localhost;dbname=aluratube', 'root', 'admin');

$routes = require_once __DIR__ . "/../routes/routes.php";
$videoRepository = new VideoRepository($pdo);
$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];


$key = "$httpMethod|$pathInfo";
if(array_key_exists($key, $routes)) {
  $controllerClass = $routes["$httpMethod|$pathInfo"];
  
  $controller = new $controllerClass($videoRepository);
} else {
  header('Location: /');
}

/** @var Controller $controller */
$controller->processaRequisicao();