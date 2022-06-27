<?php
$nameOfdatabase = 'systemcrud.advanced';
$DataBaseLOcal =  'localhost';
$daTabaseUSER = 'root';
$DatabasePass = '';
$pdo = new PDO('mysql:host=' . $DataBaseLOcal . ';dbname=' . $nameOfdatabase, $daTabaseUSER, $DatabasePass);
$SQL = $pdo->query('SELECT * FROM product ');
