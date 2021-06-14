<?php
echo "
<section>
<div class='my-form'>
<form action='" . APPLICATION_PATH . "index.php?controller=cars&action=create' method='post' enctype='multipart/form-data'>
  <div class='mb-3'>
    <label for='model' class='form-label'>Model</label>
    <input type='text' class='form-control' name='model'>
    <div id='emailHelp' class='form-text'></div>
  </div>
  <div class='mb-3'>
    <label for='power' class='form-label'>Power</label>
    <input type='number' class='form-control' name='power'>
  </div>
  <div class='mb-3'>
    <label for='price' class='form-label'>Price</label>
    <input type='number' class='form-control'  name='price'>
  </div>
  <div class='mb-3'>
    <label for='mileage' class='form-label'>Mileage</label>
    <input type='number' class='form-control' name='mileage'>
  </div>
  <div class='mb-3'>
    <label for='type_of_engine' class='form-label'>Engine type</label>
    <input type='text' class='form-control' name='type_of_engine'>
  </div>
  <div class='mb-3'>
    <label for='transmission' class='form-label'>Transmission</label>
    <input type='text' class='form-control' name='transmission'>
  </div>
  <div class='mb-3'>
    <label for='category' class='form-label'>Category</label>
    <input type='text' class='form-control' name='category'>
  </div>
  <div class='mb-3'>
    <label for='color' class='form-label'>Color</label>
    <input type='text' class='form-control' name='color'>
  </div>
  <div class='mb-3'>
    <label for='description' class='form-label'>Description</label>
    <input type='text' class='form-control' name='description'>
  </div>   
  <div class='mb-3'>
    <label for='picture' class='form-label'>Picture</label>
     <input type='file' name='file_to_upload'><br>
     <button class='btn btn-primary' name='create' value='true'>Sell</button>
  </div> 
</form>
</div>
</section>
<style>
.form-control{
width:200px;
border: 2px solid black;
}
section{
justify-content: center;
align-items: center;
display:flex; 
background-color: #f2cf43;
background-image: linear-gradient(315deg, #f2cf43 0%, #19a186 74%);
}
.mb-3{
background-color: #f5f186;
background-image: linear-gradient(315deg, #f5f186 0%, #9dfbc8 74%);
justify-content: center;
align-items: center;
display: flex;
flex-direction: column;
text-transform: uppercase;
font-weight: bolder;
padding: 0;
}
.my-form{
border: 2px solid black;
width:50%;
margin:20px; 
background-color: #f5f186;
background-image: linear-gradient(315deg, #f5f186 0%, #9dfbc8 74%);
padding: 0;
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
</style>
";