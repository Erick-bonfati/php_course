<?php

use Alura\Mvc\Repository\VideoRepository;

$pdo = new PDO('mysql:host=localhost;dbname=aluratube', 'root', 'admin');

$id = $_GET['id'];

$repository = new VideoRepository($pdo);
$repository->remove($id);


header('Location: /');