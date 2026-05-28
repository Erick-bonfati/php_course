<?php

namespace Alura\Mvc\Controller;

use Alura\Mvc\Repository\VideoRepository;
use Alura\Mvc\Entity\Video;

class VideoGetForm implements Controller{

  public function __construct(private VideoRepository $videoRepository) {}
    
  public function processaRequisicao(): void {
   
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $video = [
        'url' => '',
        'title' => '',
    ];
    if ($id !== false && $id !== null) {
        $video = $this->videoRepository->findById($id);
    }

    require_once __DIR__ . "/../views/video-form.php";
  }
}