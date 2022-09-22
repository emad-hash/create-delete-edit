<?php 

include "config.php"; 
if (isset($_GET['id'])) {
    $car_id = $_GET['id'];
    $sql = "DELETE FROM `car` WHERE `id`='$car_id'";
     $result = $conn->query($sql);
     if ($result == TRUE) {
      echo "Record deleted successfully.";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 
?>