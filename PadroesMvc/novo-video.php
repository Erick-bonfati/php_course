<?php

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Repository\VideoRepository;

$pdo = new PDO('mysql:host=localhost;dbname=aluratube', 'root', 'admin');

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);

if ($url === false || $url === null) {
    header('Location: /enviar-video');
    exit();
}

$title = filter_input(INPUT_POST, 'title');

if ($title === false || $title === null || trim($title) === '') {
    header('Location: /enviar-video');
    exit();
}

$repository = new VideoRepository($pdo);
$video = new Video($url, $title);

$repository->add($video);

header('Location: /');