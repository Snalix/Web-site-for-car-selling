<?php

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$errors = array();

$dsn = 'mysql:host=localhost;dbname=cars';
$pdo = new PDO($dsn, 'root');
if(empty($username)){
    array_push($errors,"Username is required");
}
if(empty($password)){
    array_push($errors,"Password is required");
}
if(empty($email)){
    array_push($errors,"Email is required");
}
$user_check_query = $pdo->query("SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1");
$user = $user_check_query->fetch(PDO::FETCH_ASSOC);
if ($user) { // if user exists
    if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
        array_push($errors, "email already exists");
    }
}
if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database
    $sql = 'INSERT INTO users(username,password,email) VALUES(:username,:password,:email)';
    $query = $pdo->prepare($sql);
    $query->execute(['username' => $username, 'password' => $password, 'email' => $email]);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
}
?>