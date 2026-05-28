<?php

namespace Alura\Mvc\Controller;

use Alura\Mvc\Repository\VideoRepository;

class VideoRemoveController implements Controller {

  public function __construct(private VideoRepository $videoRepository) {}
    
  public function processaRequisicao(): void {
    
    $id = $_GET['id'];

    $this->videoRepository->remove($id);

    header('Location: /');
  }
}