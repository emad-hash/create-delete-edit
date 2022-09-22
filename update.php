<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $namecar = $_POST['namecar'];
        $car_id = $_POST['id'];
        $image = $_POST['img'];
        $mod = $_POST['model'];
        $price = $_POST['price'];
        $color = $_POST['color'];

        $sql = "UPDATE `car` SET `namecar`='$namecar',`img`='$image',`model`='$mod',`price`='$price',`color`='$color' WHERE `id`='$car_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $car_id = $_GET['id']; 
    $sql = "SELECT * FROM `car` WHERE `id`='$car_id'";
    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $namecar = $row['namecar'];
            $image = $row['img'];
            $mod = $row['model'];
            $price  = $row['price'];
            $color = $row['color'];
            $id = $row['id'];
        } 
    ?>
        <h2>cer Update Form</h2>
        <form action="" method="post">
          <fieldset>
             id:<br>
              <input type="text" name="id">
              <br>
              name:<br>
              <input type="text" name="namecar">
              <br>
              img:<br>
              <input type="url" name="img">
               <br>
              model:<br>
              <input type="number" name="model">
             <br>
             price:<br>
             <input type="number" name="price">
             <br>
             color:<br>
             <input type="text" name="color">
             <br><br>
                <input type="submit" value="Update" name="update">
          </fieldset>
        </form> 
        </body>
        </html> 
    <?php

    } else{ 
        header('Location: view.php');
    } 

}

?> 