<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<title>REQUEST: ETMP</title>
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
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "expert_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_POST['accept'])) {
    $sql = "UPDATE requests SET status='accepted' WHERE name='" . $_POST['name'] . "'";
    mysqli_query($conn, $sql);
  } elseif (isset($_POST['deny'])) {
    $sql = "UPDATE requests SET status='denied' WHERE name='" . $_POST['name'] . "'";
    mysqli_query($conn, $sql);
  }

  $sql = "SELECT name, training, tLocation, remark, status FROM requests";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Training</th>";
    echo "<th>Location</th>";
    echo "<th>Remark</th>";
    echo "<th>Status</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["training"] . "</td>";
      echo "<td>" . $row["tLocation"] . "</td>";
      echo "<td>" . $row["remark"] . "</td>";
      echo "<td>" . $row["status"] . "</td>";
      echo "<td>";
      echo "<form method='post' action=''>";
      echo "<input type='hidden' name='name' value='" . $row["name"] . "'>";
      echo "<button type='submit' name='accept'>Accept</button>";
      echo "<button type='submit' name='deny'>Deny</button>";
      echo "</form>";
      echo "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "No requests";
  }

  mysqli_close($conn);
  ?>

</body>
</html>
