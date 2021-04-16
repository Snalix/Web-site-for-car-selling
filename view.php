<?php
$dsn = 'mysql:host=localhost;dbname=cars';
$pdo = new PDO($dsn, 'root');


$id = $_GET['id'];

$sql = 'SELECT * FROM cars WHERE id = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

while($row = $query->fetch(PDO::FETCH_OBJ)) {
    require_once 'nav.php';
    echo'
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="'.$row->picture.'" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Model: '.$row->model.'</p>
                                <p class="card-text">Price: '.$row->price.'</p>
                                <p class="card-text">Power: '.$row->power.'</p>
                                <p class="card-text">Category: '.$row->category.'</p>
                                <p class="card-text">Color: '.$row->color.'</p>
                                <div class="d-flex justify-content-between align-items-center">
                                        <p><a class="btn btn-primary stretched-link" href="home.php">Back</a></p>
                                </div>
                            </div>
                        </div>
    </main>';
}