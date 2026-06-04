<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Helper\FlashMessageTrait;
use Alura\Mvc\Repository\VideoRepository;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class DeleteVideoController implements RequestHandlerInterface
{
    use FlashMessageTrait;
    public function __construct(private VideoRepository $videoRepository) {}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $queryParams = $request->getQueryParams(); // Busca todos query parameters enviados na nossa URL
        $id = filter_var($queryParams['id'], FILTER_VALIDATE_INT); // filtrando para buscar somente query "ID"
        if ($id === null || $id === false) {
            header('Location: /');
            $this->addErrorMessage("ID inválido");
            return new Response(302, [ // Cria um response padrão vindo direto do PS7 nymolm, para realizar uma ação de resposta
                'Location' => '/'
            ]);
        }

        $success = $this->videoRepository->remove($id);
        if ($success === false) {
            $this->addErrorMessage("Erro ao remover vídeo");
            return new Response(302, [
                'Location' => '/'
            ]);
        } else {
            return new Response(302, [
                'Location' => '/'
            ]);
        }
    }
}
