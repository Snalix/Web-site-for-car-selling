<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo APPLICATION_PATH?>views/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<form class="container" action="<?php echo APPLICATION_PATH?>index.php" method="post">
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5"> <span class="circle"><i class="fa fa-check"></i></span>
                    <h5 class="mt-3">CARS4YOU<br> REGISTER</h5> <small class="mt-2 text-muted"></small>
                    <div class="form-input"> <i class="fa fa-envelope"></i> <input type="email" name="email" class="form-control" placeholder="Email address"> </div>
                    <div class="form-input"> <i class="fa fa-user"></i> <input type="text" name="username" class="form-control" placeholder="User name"> </div>
                    <div class="form-input"> <i class="fa fa-lock"></i> <input type="password" name="password" class="form-control" placeholder="password"> </div>
                    <div class="form-input"> <i class="fa fa-lock"></i> <input type="hidden" name="u_role" class="form-control"> </div>
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> I agree all the statements </label> </div> <button class="btn btn-primary mt-4 signup"  name="sign_up" value="Sign Up">Submit</button>
                    <div class="text-center mt-4"> <a href="<?php echo APPLICATION_PATH?>index.php?login=true">Alredy have a registration?</a> </div>
                </div>
            </div>
        </div>
    </div>
 </form>
</body>
</html>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

    body {
        background-color: #535fe6;
        font-family: "Poppins", sans-serif;
        font-weight: 300;
    }

    .height {
        height: 100vh
    }

    .card {
        border: none;
        padding: 20px;
        background-color: #1c1e21;
        color: #fff;
        margin-top:50px;
    }

    .circle {
        height: 20px;
        width: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #5855e7;
        color: #fff;
        font-size: 10px;
        border-radius: 50%;
    }

    .form-input {
        position: relative;
        margin-bottom: 10px;
        margin-top: 10px
    }

    .form-input i {
        position: absolute;
        font-size: 18px;
        top: 15px;
        left: 10px
    }

    .form-control {
        height: 50px;
        background-color: #1c1e21;
        text-indent: 24px;
        font-size: 15px
    }

    .form-control:focus {
        background-color: #25272a;
        box-shadow: none;
        color: #fff;
        border-color: #4f63e7
    }

    .form-check-label {
        margin-top: 2px;
        font-size: 14px
    }

    .signup {
        height: 50px;
        font-size: 14px
    }

    .social {
        height: 50px;
        width: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #eee;
        border-radius: 50%;
        margin-right: 10px;
        cursor: pointer
    }

    .social:hover {
        background-color: #0d6efd;
        border-color: #0d6efd
    }
</style>