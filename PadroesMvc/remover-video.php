<?php

require_once('../database/connect.php');

$id = $_GET['id'];
$sql = "DELETE FROM video WHERE id = ?";
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $id);
$statement->execute();

header('Location: /');