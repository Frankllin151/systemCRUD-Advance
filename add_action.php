<?php
require 'config.php';
$ProDuct = filter_input(INPUT_POST, 'Product');
$Brand =   filter_input(INPUT_POST, 'brand');
$Price =  filter_input(INPUT_POST, 'price');
if ($ProDuct && $Brand && $price) {
  $SQL = $pdo->prepare('SELECT * FROM product WHERE Product = :Product');
  $SQL->bindValue(':Product', $ProDuct);
  $SQL->execute();

  if ($SQL->rowCount() === 0) {
    $SQL = $pdo->prepare('INSERT INTO Product (brand, price) VALUES (:Brand, price)');
    $SQL->bindValue(':Brand', $Brand);
    $SQL->bindValue(':price', $price);
  } else {
    header('Location: index.php');
    exit;
  }
} else {
  header('Location: add.php');
  exit;
}
