<?php

$pdo = new PDO('mysql:host=localhost;dbname=aluratube', 'root', 'admin');

$pdo->exec('ALTER TABLE videos ADD COLUMN image_path TEXT');