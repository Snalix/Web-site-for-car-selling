<?php
require_once 'nav.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
</head>
<body>
<div class="header">
    <h2 text align="center">Register</h2>
</div>

<form method="post" action="registration.php">
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card bg-dark p-3 text-center text-white">
                <div> <img src="https://i.imgur.com/FTZY7dr.png" width="100"> </div>
                <h1>Welcome to Cars4You</h1> <span>We always have a cup of hot tea <br> and warm blanket</span>
                <div class="p-2 px-5"> <input type="text" name="username" class="form-control" placeholder="User name"><br>
                    <input type="email" name="email" class="form-control" placeholder="User email"><br>
                    <input type="password" name="password" class="form-control" placeholder="Password"><br>
                    <button type="submit" name="reg_user" class="btn btn-danger w-100 signup-button">Register</button> </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>