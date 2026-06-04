<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Helper\HtmlRendererTrait;
use Alura\Mvc\Repository\VideoRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;

class VideoFormController implements RequestHandlerInterface
{
    use HtmlRendererTrait;
    public function __construct(private VideoRepository $repository) {}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $getBody = $request->getParsedBody();
        $queryParams = $request->getQueryParams();
        $idRaw = $queryParams['id'] ?? $getBody['id'] ?? null;
        $id = filter_var($idRaw, FILTER_VALIDATE_INT);
        /** @var ?Video $video */
        $video = null;
        if ($id !== false && $id !== null) {
            $video = $this->repository->find($id);
        }

        return new Response(200, body: $this->renderTemplate('video-form', ['video' => $video]));
    }
}
