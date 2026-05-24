<?php 

class Product {
    private ?int $id;
    private string $nome;
    private string $descricao;
    private float $preco;
    private string $imagem;
    private string $tipo;

    public function __construct(?int $id, string $nome, string $tipo, string $descricao, float $preco, string $imagem = "logo-serenatto.png") {
        $this->id = $id;
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagem = $imagem;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getImagem() {
        return "img/" . $this->imagem;
    }

    public function getTipo() {
        return $this->tipo;
    }
}