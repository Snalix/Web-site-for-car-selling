   <?php
   require 'nav.php';
   echo '
 <h1 text align="center">POST YOUR CAR</h1>
    <div class = "container" >
    <style>
    .container{
    justify-content: center;
    align-items: center;
    display: flex;
    }
</style>
       
        <form action="add.php/" method="post">
            <label>Model: <input type="text" name="model" id="model" placeholder="car model" class="form-control"> <br>
            <label>Color: <input type="text" name="color" id="color" placeholder="car color" class="form-control"><br>
            <label>Power: <input type="text" name="power" id="power" placeholder="car power" class="form-control"><br>
            <label>Category: <input type="text" name="category" id="category" placeholder="car category" class="form-control"><br>
             <label>Price: <input type="text" name="price" id="price" placeholder="car price" class="form-control"><br>
            <label>Picture: <input type="text" name="picture" id="picture" placeholder="picture" class="form-control" accept="application/link-format"><br>
            <button type="submit" name="addCar" class="btn btn-success">POST</button>
        </form>
    </div>
    '
    ?>