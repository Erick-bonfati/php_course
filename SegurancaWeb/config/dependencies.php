<?php

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions([
  PDO::class => function(): PDO {
    return new PDO('mysql:host=localhost;dbname=aluratube', 'root', 'admin');
  },
  \League\Plates\Engine::class => function() {
    $templatePath = __DIR__ . '/../views';
    return new League\Plates\Engine($templatePath);
  }
]);

/** @var \Psr\Container\ContainerInterface */
$container = $builder->build();

return $container;