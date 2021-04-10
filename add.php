<?php
 $model = $_POST['model'];
 $color = $_POST['color'];
 $power = $_POST['power'];
 $category = $_POST['category'];
 $picture = $_POST['picture'];
 $price = $_POST['price'];

 $dsn = 'mysql:host=localhost;dbname=cars';
 $pdo = new PDO($dsn, 'root');

 $sql = 'INSERT INTO cars(model,color,power,category,picture,price) VALUES(:model,:color,:power,:category,:picture,:price)';
 $query = $pdo->prepare($sql);
 $query->execute(['model'=>$model,'color'=>$color,'power'=>$power,'category'=>$category,'picture'=>$picture,'price'=>$price]);

 require_once 'index.php';