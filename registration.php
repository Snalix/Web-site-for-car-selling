<?php

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$errors = array();

$dsn = 'mysql:host=localhost;dbname=cars';
$pdo = new PDO($dsn, 'root');
if(empty($username)){
    array_push($errors,"Username is required");
    echo "Username req!";
    require_once 'signUp.php';
}
if(empty($password)){
    array_push($errors,"Password is required");
    echo "Password req!";
    require_once 'signUp.php';
}
if(empty($email)){
    array_push($errors,"Email is required");
    echo "Email req!";
    require_once 'signUp.php';
}
$user_check_query = $pdo->prepare("SELECT * FROM users WHERE username=:username OR email=:email LIMIT 1");
$user_check_query->execute(array(':username'=>$username,':email'=>$email));
$user = $user_check_query->fetch(PDO::FETCH_ASSOC);
if ($user) { // if user exists
    if ($user['username'] === $username) {
         array_push($errors, "Username already exists");
         echo 'Username already exists';
        require_once 'signUp.php';

    }

    if ($user['email'] === $email) {
          array_push($errors, "email already exists");
          echo 'Email already exists';
        require_once 'signUp.php';
    }
}
if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database
    $insertStmt = $pdo->prepare('INSERT INTO users(username,password,email) VALUES(:username,:password,:email)');
    $insertStmt->execute(['username' => $username, 'password' => $password, 'email' => $email]);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
}
?>