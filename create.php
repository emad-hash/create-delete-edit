<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $namecar = $_POST['namecar'];
    $image = $_POST['img'];
    $mod = $_POST['model'];
    $price = $_POST['price'];
    $color = $_POST['color'];

    $sql = "INSERT INTO `car`(`namecar`, `img`, `model`, `price`, `color`) VALUES ('$namecar','$image','$mod','$price','$color')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Location: view.php');
        }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="#view.php" method="POST">
  <fieldset>
    <legend>test</legend>
     name:<br>
    <input type="text" name="namecar">
    <br>
    img:<br>
    <input type="url" name="img" >
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
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>