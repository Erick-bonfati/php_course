<?php

class Video {
    private $id;
    private $url;
    private $titulo;

    public function __construct($id, $url, $titulo) {
        $this->id = $id;
        $this->url = $url;
        $this->titulo = $titulo;
    }

    public function getId() {
        return $this->id;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getTitulo() {
        return $this->titulo;
    }
}