<?php require 'nav.php'; ?>
<div class = "container">
    <h1>Post your car</h1>
    <form action="update.php" method="post">
        <label for="u_id">Enter your id post:</label>
        <input type="text" name="u_id" placeholder="id" class="form-control"> <br>
        <input type="text" name="u_model"  placeholder="car model" class="form-control"> <br>
        <input type="text" name="u_color"  placeholder="car color" class="form-control"><br>
        <input type="text" name="u_power"  placeholder="car power" class="form-control"><br>
        <input type="text" name="u_category" placeholder="car category" class="form-control"><br>
        <input type="text" name="u_price"  placeholder="car price" class="form-control"><br>
        <input type="text" name="u_picture"  placeholder="picture" class="form- control" accept="application/link-format"><br><br>
        <input type="submit" name="update" value="UPDATE DATA"><br>
    </form>
</div>