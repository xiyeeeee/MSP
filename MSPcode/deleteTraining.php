<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <?php
    include_once "includes/connect.php";

    $deleted = "";
    ?>
    <h1>Delete Training</h1>
    <div>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $names = $_POST["oNames"];
        if($_POST["submit"]=="Yes"){
            $sql ="DELETE FROM trainings WHERE tName = '$names'";
            if(mysqli_query($conn, $sql)){
                $deleted = "The Training has been deleted";
                unlink("img/".$names.".png");
            }else{
                $deleted = "Something went wrong!";
            }
        }elseif($_POST["submit"]=="No"){
            header("Location:displayTrainingInfo.php?names=$names");
        }
    }else{
        $names = $_GET['sName'];
        echo "<legend>Are you sure you want to delete?</legend>";
        echo "<input type='submit' name='submit' value='Yes'/>";
        echo "<input type='submit' name='submit' value='No'/>";
        
    }
    ?>
    <p><input type="hidden" value=<?php echo "$names"?> name="oNames"/></p>
    </form>
    </p>
    <p><?php echo $deleted?></p>
    </div>

</body>
</html>