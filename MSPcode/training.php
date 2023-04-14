<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style1.css">
	<script src="script.js"></script>
	<title>TRAINING: ETMP</title>
</head>
<body>
	<div class="header-container">
  <div class="logo-container">
    <div class="logo">
      <h1 class="logo-text">Expert<span class="trademark">&reg;</span></h1>
    </div>
    <nav class="navbar">
      <ul>
        <li><a href="client.php">Home <i class="fas fa-home"></i></a></li>
        <li class="dropdown">
          <a href="training.php">Trainings <i class="fas fa-bars"></i></a>
          <div class="dropdown-content">
            <a href="#">Segmentation Workshop</a>
            <a href="#">Co-Creation Workshop</a>
            <a href="#">Consumer Brainstorm Workshop</a>
            <a href="#">Team Activation Workshop</a>
          </div>
        </li>
        <li><a href="request.php">Request <i class="fas fa-home"></i></a></li>
        <li><a href="#">Booking <i class="fas fa-cart-plus"></i></a></li>
        <li class="dropdown">
          <a href="profile.php">Profile <i class="fas fa-user"></i></a>
          <div class="dropdown-content">
            <a href="change_password.php">Change Password</a>
            <a href="delete_acc.php">Delete Account</a>
          </div>
        </li>
        <li><a href="login.php">Logout <i class="fas fa-user-circle"></i></a></li>
      </ul>
    </nav>
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
