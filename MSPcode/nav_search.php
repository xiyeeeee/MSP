<?php
$conn = new mysqli('localhost', 'root', '', 'expert_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$category = $_GET['category'];

$sql = "SELECT tName, tDescription FROM Trainings WHERE tCategory = '$category'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Training Name: " . $row["tName"]. "<br>";
        echo "Training Description: " . $row["tDescription"]. "<br><br>";
    }
} else {
    echo "No Result";
}

$conn->close();
?>
