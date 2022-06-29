<?php
$nameOfdatabase = 'systemcrud.advanced';
$DataBaseLOcal =  'localhost';
$daTabaseUSER = 'root';
$DatabasePass = '';
$pdo = new PDO('mysql:dbname=' . $nameOfdatabase . ';host=' . $DataBaseLOcal, $daTabaseUSER, $DatabasePass);
$SQL = $pdo->query('SELECT * FROM product ');
