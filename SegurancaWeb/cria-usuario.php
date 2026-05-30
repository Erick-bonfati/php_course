<?php

$pdo = new PDO('mysql:host=localhost;dbname=aluratube', 'root', 'admin');

$email = $argv[1];
$password = $argv[2];

$hash = password_hash($password, PASSWORD_ARGON2ID); // PASSWORD_ARGON2ID is actually one of the best password encrypts that exists

$sql = 'INSERT INTO users (email, password) VALUES(?, ?);';

$statement = $pdo->prepare($sql);
$statement->bindValue(1, $email);
$statement->bindValue(2, $hash);
$statement->execute();


 