<?php
echo "
<section>
<div class='my-form'>
<form action='" . APPLICATION_PATH . "index.php?controller=cars&action=update' method='post'>

    <input style='display: none' name='id' value='$data->id'>
    <label>Model</label>
    <input type='text' name='model' value='$data->model'><br>
    <label>Description</label>
    <input type='text' name='description' value='$data->description'><br>
    <label>Color</label>
    <input type='text' name='color' value='$data->color'><br>
    <label>Price</label>
    <input type='text' name='price' value='$data->price'><br>
    <label>Power</label>
    <input type='text' name='power' value='$data->power'><br>
     <label>Engine type</label>
    <input type='text' name='type_of_engine' value='$data->type_of_engine'><br>
     <label>Transmission</label>
    <input type='text' name='transmission' value='$data->transmission'><br>
     <label>Mileage</label>
    <input type='text' name='mileage' value='$data->mileage'><br>
     <label>Category</label>
    <input type='text' name='category' value='$data->category'><br>
     <label>Picture</label>
   <input type='text' name='picture' value='$data->picture'><br>
    <button name='update' value='true'>Update</button>
</form>
</div>
</section>
<style>
.my-form{
border: 2px solid black;
width:50%;
margin:20px; 
background-color: #f5f186;
background-image: linear-gradient(315deg, #f5f186 0%, #9dfbc8 74%);
padding: 0;
}
section{
justify-content: center;
align-items: center;
display:flex; 
background-color: #f2cf43;
background-image: linear-gradient(315deg, #f2cf43 0%, #19a186 74%);
}
</style>
";