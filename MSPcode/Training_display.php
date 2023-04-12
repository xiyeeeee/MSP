<!DOCTYPE html>
<html>
<head>
	<title>Training Preview</title>
	<style>
		nav {
			background-color: #333;
			overflow: hidden;
		}

		nav a {
			float: left;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		nav a:hover {
			background-color: #ddd;
			color: black;
		}

		.dropdown {
			float: left;
			overflow: hidden;
		}

		.dropdown .dropbtn {
			cursor: pointer;
			font-size: 16px;
			border: none;
			outline: none;
			color: white;
			padding: 14px 16px;
			background-color: inherit;
			font-family: inherit;
			margin: 0;
		}

		nav a:hover, .dropdown:hover .dropbtn {
			background-color: #ddd;
			color: black;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			float: none;
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}

		.dropdown-content a:hover {
			background-color: #ddd;
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}

	</style>
</head>
<body>
	<nav>
		<a href="#">Home</a>
		<div class="dropdown">
			<button class="dropbtn">Training Categories</button>
			<div class="dropdown-content">
				<a href="nav_search.php?category=Segmentation workshop">Segmentation workshop</a>
				<a href="nav_search.php?category=Co-creation workshop">Co-creation workshop</a>
				<a href="nav_search.php?category=Consumer brainstorm workshop">Consumer brainstorm workshop</a>
                <a href="nav_search.php?category=Team activation workshop">Team activation workshop</a>
			</div>
		</div>
	</nav>
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
