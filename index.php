   <?php
   require 'nav.php';
   echo '
    <div class = "container">
        <h1>Post your car</h1>
        <form action="add.php/" method="post">
            <input type="text" name="model" id="model" placeholder="car model" class="form-control"> <br>
            <input type="text" name="color" id="color" placeholder="car color" class="form-control"><br>
            <input type="text" name="power" id="power" placeholder="car power" class="form-control"><br>
            <input type="text" name="category" id="category" placeholder="car category" class="form-control"><br>
             <input type="text" name="price" id="price" placeholder="car price" class="form-control"><br>
            <input type="text" name="picture" id="picture" placeholder="picture" class="form-control" accept="application/link-format"><br>
            <button type="submit" name="addCar" class="btn btn-success">Add</button>
        </form>
    </div>
    '
    ?>