<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8"/>
    <meta name="author" content="Joseph"/>
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

        $sName = "";
        $error = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["sName"])){
                $error = "Please enter a training name";
            }else{
                $sName = test_input($_POST["sName"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$sName)) {
                    $error = "Only letters and white space allowed";
                }else{
                    $sName = $_POST["sName"];
                    header("Location:SearchTrainingProcess.php?sName=$sName");
                }
            }
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h1>Search Training</h1>
    <div>
    <form id = "searchForm" method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p><label for="sName"><strong>Training Name:</strong></label><br/>
    <input id="sName" name = "sName" type = "text"/><span class = "error"> <?php echo $error;?></span></p>
    <p><input type="submit" value = "Search"/>
    </p>
    </form>
    </div>
</body>
</html>
