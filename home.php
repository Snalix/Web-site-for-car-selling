<?php
require 'nav.php';
$dsn = 'mysql:host=localhost;dbname=cars';
$pdo = new PDO($dsn, 'root');
$query = $pdo->query('SELECT * FROM cars');
while($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '
            <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Model</th>
                <th scope="col">Color</th>
                <th scope="col">Category</th>
                <th scope="col">Power</th>
                <th scope="col">Price</th>
                <th scope="col">Picture</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">'.$row->id.'</th>
                <td>' . $row->model . '</td>
                <td>' . $row->color . '</td>
                <td>' . $row->category . '</td>
                <td>' . $row->power . '</td>
                <td>' . $row->price . '</td>
                <td><img src="' . $row->picture . '"width="200px" height="100px" </td>
            </tr>
            </tbody>
        </table>
        ';
}
?>