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

        $dadosProdutos = array_map(array($this, 'formarObjeto'), $produtos);
        return $dadosProdutos;
    }

    public function getCoffeeOptions() {
      $sql1 = "SELECT * FROM produtos WHERE tipo = 'Café' ORDER BY preco";
      $produtosCafe = $this->pdo->query($sql1)->fetchAll(PDO::FETCH_ASSOC);

      $dadosCafe = array_map(array($this, 'formarObjeto'), $produtosCafe);
      return $dadosCafe;
    }

    public function getLunchOptions() {
      $sql2 = "SELECT * FROM produtos WHERE tipo = 'Almoço' ORDER BY preco";
      $produtosAlmoco = $this->pdo->query($sql2)->fetchAll(PDO::FETCH_ASSOC);

      $dadosAlmoco = array_map(array($this, 'formarObjeto'), $produtosAlmoco);
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
      $statement->bindValue(5, $product->getImagemFilename());
      return $statement->execute();
    }

    public function formarObjeto($dados) {
      return new Product(
        $dados['id'],
        $dados['nome'],
        $dados['tipo'],
        $dados['descricao'],
        $dados['preco'],
        $dados['imagem']
      );
    }

    public function findProductById(int $id) {
      $sql = "SELECT * FROM produtos WHERE id = ?";
      $statement = $this->pdo->prepare($sql);
      $statement->bindParam(1, $id);
      $statement->execute();
      $dados = $statement->fetch(PDO::FETCH_ASSOC);

      return $this->formarObjeto($dados);
    }

    public function updateProduct(Product $product) {
      $sql = "UPDATE produtos SET nome = ?, tipo = ?, descricao = ?, preco = ? WHERE id = ?";
      $statement = $this->pdo->prepare($sql);
      $statement->bindValue(1, $product->getNome());
      $statement->bindValue(2, $product->getTipo());
      $statement->bindValue(3, $product->getDescricao());
      $statement->bindValue(4, $product->getPreco());
      $statement->bindValue(5, $product->getId());
      $statement->execute();

      if($product->getImagemFilename() !== "img/logo-serenatto.png") {
        $this->atualizarFoto($product);
      }
    }

    public function atualizarFoto(Product $product) {
      $sql = "UPDATE produtos SET imagem = ? WHERE id = ?";
      $statement = $this->pdo->prepare($sql);
      $statement->bindValue(1, $product->getImagemFilename());
      $statement->bindValue(2, $product->getId());
      return $statement->execute();
    }
}