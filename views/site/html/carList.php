
<?php
echo "

</form>
<section>
                <form class='d-flex' action='" . APPLICATION_PATH . "index.php?controller=cars&action=listAll' method='post'>
<input class='form-control me-2' id='model' type='text' placeholder='Search for model' name='model'>
<button class='btn btn-outline-success' name='search' value='true'>Search</button>
</form>
";

if (is_array($data)) {
    foreach ($data as $car) {
        echo "
<div class='card'>
  <img src='".IMG_PATH."$car->picture' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$car->model</h5>
    <p class='card-text'>$car->price $</p>
     <form action='" . APPLICATION_PATH ."index.php?controller=cars&action=view' method='post'>
                    <button class='btn btn-primary' name='car_id' value='$car->id'>View</button>
                </form>";

                if(!empty($_SESSION) && !empty($_SESSION["u_role"]) && strcmp($_SESSION["u_role"],"admin") === 0)
                    echo "
                 <form action='" . APPLICATION_PATH ."index.php?controller=cars&action=delete' method='post'>
                    <button class='btn btn-primary' name='car_id' value='$car->id'>Delete</button>
                </form>";
                echo"
  </div>
</div>
<style>
.card{
width:50rem;
justify-content: center;
align-items: center;
border:2px solid black;
padding:15px;
background-color: #f5f186;
background-image: linear-gradient(315deg, #f5f186 0%, #9dfbc8 74%);
border-radius: 10px;
margin:10px;
}

section{
background-color: #f2cf43;
background-image: linear-gradient(315deg, #f2cf43 0%, #19a186 74%);
justify-content: center;
align-items: center;
display: flex;
flex-direction: column;
}
.btn{
width:10rem;
margin:15px;
background-color: #ef5734;
background-image: linear-gradient(315deg, #ef5734 0%, #ffcc2f 74%);
border:2px solid black;
color:black;
text-transform:uppercase;
font-weight: bolder;
letter-spacing: 4px;
}
.btn:hover{
border:2px dashed black;
}
.card-body{
text-align: center;
}
.card-title{
font-weight: bolder;
font-size:50px;
}
.navbar{
background-color: red;
}
.d-flex{
margin: 20px;

}
.form-control{
border:2px solid black;
}

</style>
";
    }
}

