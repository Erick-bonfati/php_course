<?php


require_once 'src/Model/Product.php';

class ProductRepository {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listProducts() {
        $sql = "SELECT * FROM produtos ORDER BY preco";
        $produtos = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        $dadosProdutos = array_map(function($produto) {
            return new Product(
                $produto['id'],
                $produto['nome'],
                $produto['tipo'],
                $produto['descricao'],
                $produto['preco'],
                $produto['imagem']
            );
        }, $produtos);

        return $dadosProdutos;
    }

    public function getCoffeeOptions() {
      $sql1 = "SELECT * FROM produtos WHERE tipo = 'Café' ORDER BY preco";
      $produtosCafe = $this->pdo->query($sql1)->fetchAll(PDO::FETCH_ASSOC);

      $dadosCafe = array_map(function($cafe) {
          return new Product(
              $cafe['id'],
              $cafe['tipo'],
              $cafe['nome'],
              $cafe['descricao'],
              $cafe['preco'],
              $cafe['imagem']
          );
      }, $produtosCafe);

      return $dadosCafe;
    }

    public function getLunchOptions() {
      $sql2 = "SELECT * FROM produtos WHERE tipo = 'Almoço' ORDER BY preco";
      $produtosAlmoco = $this->pdo->query($sql2)->fetchAll(PDO::FETCH_ASSOC);

      $dadosAlmoco = array_map(function($almoco) {
          return new Product(
              $almoco['id'],
              $almoco['nome'],
              $almoco['tipo'],
              $almoco['descricao'],
              $almoco['preco'],
              $almoco['imagem']
          );
      }, $produtosAlmoco);
      return $dadosAlmoco;
    }

    public function deletarId(int $id) {
      $sql = "DELETE FROM produtos WHERE id = ?";
      $statement = $this->pdo->prepare($sql);
      $statement->bindParam(1, $id);
      return $statement->execute();
    }

    public function salvarProduto(Product $product) {
      $sql = "INSERT INTO produtos (nome, tipo, descricao, preco, imagem) VALUES (?, ?, ?, ?, ?)";
      $statement = $this->pdo->prepare($sql);
      $statement->bindValue(1, $product->getNome());
      $statement->bindValue(2, $product->getTipo());
      $statement->bindValue(3, $product->getDescricao());
      $statement->bindValue(4, $product->getPreco());
      $statement->bindValue(5, $product->getImagem());
      return $statement->execute();
    }
}