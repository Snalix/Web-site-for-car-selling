<?php
$dsn = 'mysql:host=localhost;dbname=cars';
$pdo = new PDO($dsn, 'root');

$id = $_GET['id'];

$sql = 'DELETE FROM cars WHERE id = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);
header("location: /");




