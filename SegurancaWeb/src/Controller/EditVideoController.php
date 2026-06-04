<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Repository\VideoRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\UploadedFileInterface;
use Psr\Http\Server\RequestHandlerInterface;

class EditVideoController implements RequestHandlerInterface
{
    public function __construct(private VideoRepository $videoRepository) {}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $getBody = $request->getParsedBody();
        $queryParams = $request->getQueryParams();
        $idRaw = $getBody['id'] ?? $getBody['ID'] ?? $queryParams['id'] ?? null;
        $id = filter_var($idRaw, FILTER_VALIDATE_INT);
        if ($id === false || $id === null) {
            return new Response(302, [
                'Location' => '/'
            ]);
        }

        $url = filter_var($getBody['url'], FILTER_VALIDATE_URL);
        if ($url === false) {
            return new Response(302, [
                'Location' => '/'
            ]);
        }
        $titulo = filter_var($getBody['titulo']);
        if ($titulo === false) {
            return new Response(302, [
                'Location' => '/'
            ]);
        }

        $video = new Video($url, $titulo);
        $video->setId($id);

        $files = $request->getUploadedFiles();
        /** @var UploadedFileInterface $uploadedImage */
        $uploadedImage = $files['image'];
        if ($uploadedImage->getError() === UPLOAD_ERR_OK) {
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $tmpFile = $uploadedImage->getStream()->getMetadata('uri');
            $mimeType = $finfo->file($tmpFile);

            if (str_starts_with($mimeType, 'image/')) {
                $safeFileName = uniqid('upload_') . '_' . pathinfo($uploadedImage->getClientFilename(), PATHINFO_BASENAME);
                $uploadedImage->moveTo(__DIR__ . '/../../public/img/uploads/' . $safeFileName);
                $video->setFilePath($safeFileName);
            }
        }

        $success = $this->videoRepository->update($video);

        if ($success === false) {
            return new Response(302, [
                'Location' => '/'
            ]);
        } else {
            return new Response(303, [
                'Location' => '/'
            ]);
        }
    }
}
