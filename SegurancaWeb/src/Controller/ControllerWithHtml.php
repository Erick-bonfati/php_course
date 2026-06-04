<?php

namespace Alura\Mvc\Controller;

abstract class ControllerWithHtml
{
  private const TEMPLATE_PATH = __DIR__ . '/../../views/';

  protected function renderTemplate(string $templateName, array $context = []): string
  {
    extract($context); // transforma as chaves do array em variáveis
    ob_start(); // inicia o buffer de saída
    require_once self::TEMPLATE_PATH . $templateName . '.php';
    $html = ob_get_clean(); // obtém o conteúdo do buffer
    return $html;
  }
}