<?php
$search_keyword = $_GET['search'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expert_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT tName, tDescription FROM Trainings WHERE tName LIKE '%$search_keyword%'";

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
