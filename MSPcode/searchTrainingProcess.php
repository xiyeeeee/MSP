<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8"/>
    <meta name="author" content="Joseph"/>
    <link rel="stylesheet" type="text/css" href="../style.css"/>
</head>
<body>
    <?php
        include_once "includes/connect.php";

        $training = array();
        $sName = $_GET["sName"];
        $sql = "SELECT tName FROM trainings WHERE INSTR(tName, '$sName')> 0";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                array_push($training,$row['tName']);
            }            
        }

    
    ?>
    <h1>Staff Information</h1>
    <div class>
    <form id = "searchProcess" method = "get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>
    <legend>Search Results</legend>
    <ul>
    <?php
        if(!empty($training)){
            $count = count($training);
            echo "<p>$count search results.</p>";
            foreach($training as $names){
                echo "<li><a href='displayTrainingInfo.php?names=$names'>$names</a></li>";
            }
        }else{
            echo "<p>No search results</p>";
        }
    ?>
    </ul>
    </fieldset>
    </form>
    </div>
</body>
</html>