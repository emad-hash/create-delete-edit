<?php 

include "config.php";

$sql = "SELECT * FROM car";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="ph.css">
</head>
<body>
<div class="container">
<h2>car</h2>

 <?php

if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {

        ?>
                   <div class="card">
                   <div class="card2">
                        <img src="<?php echo $row['img'];?>" alt="img car">
                        <p><?php echo $row['id'];?></p>
                        <p><?php echo $row['namecar']; ?></p>
                        <p><?php echo $row['model']; ?></p>
                        <p><?php echo $row['color']; ?></p>
                        <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </div>
                   </div>

        <?php       }
            }
        ?>                
    </div> 
</body>
</html>

