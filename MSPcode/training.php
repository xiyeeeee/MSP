<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style1.css">
	<script src="script.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<title>TRAINING: ETMP</title>
</head>
<body>
	<div class="header-container">
  <div class="logo-container">
    <div class="logo">
      <h1 class="logo-text">Expert<span class="trademark">&reg;</span></h1>
    </div>
    <?php include 'navigation.php';?>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <form class="form-inline" action="input_search.php" method="get">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	<br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "expert_db";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " .  mysqli_connect_error());
}

//Create database if not exists
$createDB = "CREATE DATABASE IF NOT EXISTS $dbName";
mysqli_query($conn, $createDB);

mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $password, $dbName);
if (!$conn) {
    die("Connection failed: " .  mysqli_connect_error());
}

createTableTraining($conn);

function createTableTraining($conn){
    $sql = "CREATE TABLE IF NOT EXISTS trainings (
        tID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        tName VARCHAR(128) NOT NULL,
        tCategory VARCHAR(128) NOT NULL,
        tDescription TEXT NOT NULL
    )";
    mysqli_query($conn, $sql);
}

mysqli_close($conn);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expert_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT tName, tDescription FROM Trainings";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "Training Name: " . $row["tName"] . "<br>";
    echo "Description: " . $row["tDescription"] . "<br><br>";
  }
} else {
  echo "No results found.";
}

mysqli_close($conn);
?>

</body>
</html>
