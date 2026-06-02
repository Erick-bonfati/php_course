<?php

namespace Alura\Mvc\Controller;

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Repository\VideoRepository;

class NewJsonVideoController implements Controller
{
  public function __construct(private VideoRepository $videoRepository)
  {

  }
  public function processaRequisicao(): void
  {
    $request = file_get_contents('php://input'); // Take POST request data 
    $videoData = json_decode($request, true); // transforming the data json into a array response
    $video = new Video($videoData['url'], $videoData['title']);
    $this->videoRepository->add($video);

    http_response_code(201);
  }
}