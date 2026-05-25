<?php

require_once '../database/connect.php';

$sql = "INSERT INTO video (url, title) VALUES (?, ?)";
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $_POST['url']);
$statement->bindValue(2, $_POST['title']);

$statement->execute();

header('Location: ../index.php');