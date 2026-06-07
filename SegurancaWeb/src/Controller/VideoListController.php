<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Repository\VideoRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use League\Plates\Engine;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;

class VideoListController implements RequestHandlerInterface
{
    public function __construct(
        private VideoRepository $videoRepository,
        private Engine $templates
    ) {}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $videoList = $this->videoRepository->all();
        return new Response(200, body: $this->templates->render('video-list', ['videoList' => $videoList]));
    }
}
