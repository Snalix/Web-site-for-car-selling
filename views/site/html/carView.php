<?php

echo "
<section>
<div class='card' style='color:black;'>
  <img src='".IMG_PATH."$data->picture' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h1 class='card-title'>$data->model</h1>
    <p class='card-text'>Engine type: $data->type_of_engine</p>
    <p class='card-text'>Color: $data->color</p>
    <p class='card-text'>Category: $data->category</p>
    <p class='card-text'>Description: $data->description</p>
    <p class='card-text'>Mileage: $data->mileage km</p>
    <p class='card-text'>Price: $data->price$</p>
    <p class='card-text'>Transmission: $data->transmission</p>
    <p class='card-text'>Power: $data->power hp.</p>";
    if(!empty($_SESSION) && !empty($_SESSION["u_role"]) && strcmp($_SESSION["u_role"],"admin") === 0)
        echo "
     <form action='" . APPLICATION_PATH . "index.php?controller=cars&action=update&car_id=$data->id' method='post'>
    <button class='btn btn-primary' type='submit'>Update</button>
    </form>";
    echo"
     <form action='" . APPLICATION_PATH . "index.php?controller=cars&action=listAll' method='post'>
    <button class='btn btn-primary' type='submit'>Back</button>
</form>
  </div>
  </section>
";

?>
<style>
    section{
        background-color: #f2cf43;
        background-image: linear-gradient(315deg, #f2cf43 0%, #19a186 74%);
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }
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
</style>
