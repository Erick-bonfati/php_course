<?php

namespace Alura\Mvc\Controller;

use Alura\Mvc\Repository\VideoRepository;
use Alura\Mvc\Entity\Video;

class VideoStoreController implements Controller{

  public function __construct(private VideoRepository $videoRepository) {}
    
  public function processaRequisicao(): void {
    $url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);

    if ($url === false || $url === null) {
        header('Location: /enviar-video');
        exit();
    }

    $title = filter_input(INPUT_POST, 'title');

    if ($title === false || $title === null || trim($title) === '') {
        header('Location: /enviar-video');
        exit();
    }

    $video = new Video($url, $title);
    $this->videoRepository->add($video);

    header('Location: /');
    
  }
}