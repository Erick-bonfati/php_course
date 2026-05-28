<?php

namespace Alura\Mvc\Controller;

use Alura\Mvc\Repository\VideoRepository;
use Alura\Mvc\Entity\Video;

class VideoUpdateController implements Controller {

  public function __construct(private VideoRepository $videoRepository) {}
    
  public function processaRequisicao(): void {
    
    $url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
    if ($url === false) {
        header('Location: /?sucesso=0');
        exit();
    }
    $titulo = filter_input(INPUT_POST, 'title');
    if ($titulo === false) {
        header('Location: /?sucesso=0');
        exit();
    }

    $id = $_GET['id'];
    $video = new Video($url, $titulo);
    $video->setId($id);
    $this->videoRepository->update($video);

    header('Location: /');
  }
}