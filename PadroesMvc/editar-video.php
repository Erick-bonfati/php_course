<?php

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Repository\VideoRepository;

$pdo = new PDO('mysql:host=localhost;dbname=aluratube', 'root', 'admin');

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if ($url === false) {
    header('Location: /?sucesso=0');
    exit();
}
$titulo = filter_input(INPUT_POST, 'title');
if ($titulo === false) {
    header('Location: /?sucesso=0');
    exit();
}

$id = $_GET['id'];
$repository = new VideoRepository($pdo);
$video = new Video($url, $titulo);
$video->setId($id);
$repository->update($video);

header('Location: /');

