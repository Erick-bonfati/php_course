<?php

declare(strict_types=1);

return [
  'GET|/' => \Alura\Mvc\Controller\VideoListController::class,
  'GET|/novo-video' => \Alura\Mvc\Controller\VideoGetForm::class,
  'POST|/novo-video' => \Alura\Mvc\Controller\VideoStoreController::class,
  'GET|/editar-video' => \Alura\Mvc\Controller\VideoGetForm::class,
  'POST|/editar-video' => \Alura\Mvc\Controller\VideoUpdateController::class,
  'GET|/remover-video' => \Alura\Mvc\Controller\VideoRemoveController::class
];
