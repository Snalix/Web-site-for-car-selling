<?php
require 'nav.php';
$dsn = 'mysql:host=localhost;dbname=cars';
$pdo = new PDO($dsn, 'root');
$query = $pdo->query('SELECT * FROM cars ORDER BY model ASC; ');
while($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '
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
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-primary stretched-link" href="view.php?id='.$row->id.'">View</a>
                                        <a class="btn btn-primary stretched-link" href="updateHTML.php?id='.$row->id.'">Update</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
    </main>
      ';
}
?>