<?php

require_once 'src/connect-bd.php';
require_once 'src/Model/Product.php';
require_once 'src/Repository/ProductRepository.php';

$productRepository = new ProductRepository($pdo);

$productRepository->deletarId($_POST['id']);

header('Location: admin.php');

