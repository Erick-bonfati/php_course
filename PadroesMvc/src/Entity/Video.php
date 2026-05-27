<?php

namespace Alura\Mvc\Entity;

class Video {
    public int $id;
    public string $url;

    public function __construct(string $url, public readonly string $title) {
        $this->setUrl($url);
    }

    public function setUrl(string $url) {
        $this->url = $url;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }
}