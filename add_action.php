<?php
require 'config.php';
$ProDuct = filter_input(INPUT_POST, 'product');
$Brand =   filter_input(INPUT_POST, 'brand');
$Price =  filter_input(INPUT_POST, 'price');
if ($ProDuct && $Brand && $Price) {
  $SQL = $pdo->prepare('SELECT * FROM product WHERE product = :product');
  $SQL = $pdo->prepare('SELECT * FROM product WHERE brand = :brand');
  $SQL = $pdo->prepare('SELECT * FROM product WHERE price = :price');
  $SQL->bindValue(':product', $ProDuct);
  $SQL->bindValue(':price', $Price);
  $SQL->bindValue(':brand', $Brand);
  $SQL->execute();

  if ($SQL->rowCount() === 0) {
    $SQL = $pdo->prepare('INSERT INTO product (product,brand, price) VALUES (:product :brand, :price)');
    $SQL->bindValue(':brand', $Brand);
    $SQL->bindValue(':price', $Price);
    $SQL->bindValue(':product', $ProDuct);
    header('Location: index.php');
  } else {
    header('Location: add.php');
    exit;
  }
} else {
  header('Location: add.php');
  exit;
}
