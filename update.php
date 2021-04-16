
<?php
require 'nav.php';
?>

<?php
if(isset($_POST['update']))
    $u_id = $_POST['u_id'];
$u_model = $_POST['u_model'];
$u_color = $_POST['u_color'];
$u_power = $_POST['u_power'];
$u_category = $_POST['u_category'];
$u_picture = $_POST['u_picture'];
$u_price = $_POST['u_price'];


$dsn = 'mysql:host=localhost;dbname=cars';
$pdo = new PDO($dsn, 'root');

$pdo->query("UPDATE cars SET model = '$u_model', color = '$u_color', power = '$u_power', category = '$u_category', price = '$u_price', picture = '$u_picture' WHERE id = $u_id ");
