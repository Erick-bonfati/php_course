<?php

require_once '../database/connect.php';

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);

if($url === false) {
    header('Location: /enviar-video');
    exit();
}

$title = filter_input(INPUT_POST, 'title');

if($title === false) {
    header('Location: /enviar-video');
    exit();
}

$sql = "INSERT INTO video (url, title) VALUES (?, ?)";
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $url);
$statement->bindValue(2, $title);

$statement->execute();

header('Location: /');