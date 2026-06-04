<?php

namespace Alura\Mvc\Controller;

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Repository\VideoRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;

class NewJsonVideoController implements RequestHandlerInterface
{
  public function __construct(private VideoRepository $videoRepository) {}
  public function handle(ServerRequestInterface $request): ResponseInterface
  {
    $request = file_get_contents('php://input'); // Take POST request data 
    $videoData = json_decode($request, true); // transforming the data json into a array response
    $video = new Video($videoData['url'], $videoData['title']);
    $this->videoRepository->add($video);

    return new Response(201, body: http_response_code(201));
  }
}
