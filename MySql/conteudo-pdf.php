<?php

require_once 'src/connect-bd.php';
require_once 'src/Model/Product.php';
require_once 'src/Repository/ProductRepository.php';

$productRepository = new ProductRepository($pdo);

$listProducts = $productRepository->listProducts();

?>

<style>
    table{
        width: 90%;
        margin: auto 0;
    }
    table, th, td{
        border: 1px solid #000;
    }

    table th{
        padding: 11px 0 11px;
        font-weight: bold;
        font-size: 18px;
        text-align: left;
        padding: 8px;
    }

    table tr{
        border: 1px solid #000;
    }

    table td{
        font-size: 18px;
        padding: 8px;
    }
    .container-admin-banner h1{
        margin-top: 40px;
        font-size: 30px;
</style>

<table>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Tipo</th>
          <th>Descricão</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listProducts as $product) { ?>
      <tr>
        <td><?=  $product->getNome(); ?></td>
        <td><?= $product->getTipo(); ?></td>
        <td><?= $product->getDescricao(); ?></td>
        <td><?= "R$ " . number_format($product->getPreco(), 2, ',', '.') ?></td>
      </tr>
      <?php } ?>
      
      </tbody>
</table>