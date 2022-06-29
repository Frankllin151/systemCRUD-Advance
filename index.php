<?php
require 'config.php';
$listArray = [];
//
$SQL = $pdo->query('SELECT * FROM product ');
if ($SQL->rowCount() > 0) {
  $listArray = $SQL->fetchAll(PDO::FETCH_ASSOC);
}
?>
<table border="1" width="100%">
  <button>
    <a href="add.php">ADD PRODUCT</a>
  </button>

  <tr>
    <th>ID</th>
    <th>PRODUCT</th>
    <th>BRAND</th>
    <th>PRICE</th>
  </tr>
  <?php foreach ($listArray as $product) : ?>

    <tr>
      <th><?= $product['id'] ?></th>
      <th><?= $product['product'] ?></th>
      <th><?= $product['brand'] ?></th>
      <th><?= $product['price'] ?></th>
    </tr>
  <?php endforeach ?>
</table>