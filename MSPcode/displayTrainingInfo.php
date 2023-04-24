<!DOCTYPE html>
<html lang="en">
<head>
    <title>TRAINING: ETMP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class= "dashboard-container">
    <div class="header-container">
    <div class="logo-container">
      <div class="logo">
        <h1 class="logo-text">Expert<span class="trademark">&reg;</span></h1>
      </div>
      <?php include 'adminNav.php';?>
    </div>
    </div>
    </div>
  	<br></br>
      <br></br>
      <br></br>
    <?php
        include_once "includes/connect.php";

        $names = $_GET['names'];
        $sql1 = "SELECT * FROM trainings WHERE tName = '$names'";
        $result = mysqli_query($conn, $sql1);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $tName = $row['tName'];
            $tCategory = $row['tCategory'];
            $tLocation = $row['tLocation'];
            $tPrice = $row['tPrice'];
            $tDescription = $row['tDescription'];

            $img = "img/". $tName . ".png";
        }

    ?>
    <h1>Training Information</h1>
    <div class="content">
    <form>
    <img <?php echo "src='$img'"?>/>
    <fieldset>
    <strong>Name</strong>: <?php echo $tName;?></br>
    <strong>Category</strong>: <?php echo $tCategory;?></br>
    <strong>Location</strong>: <?php echo $tLocation;?></br>
    <strong>Price</strong>: <?php echo $tPrice;?></br>
    <strong>Description</strong>: <?php echo $tDescription;?></br>
    <button type="button" onclick="document.location.href='edit_training.php?sName=<?php echo $tName;?>'">Edit</button>
    <button type="button" onclick="document.location.href='deleteTraining.php?sName=<?php echo $tName;?>'">Delete</button>
    </fieldset>
    </form>
    </div>
</body>
</html>
