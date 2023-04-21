<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<title>TRAINING: ETMP</title>
</head>
<body id="brainbg">
<div class= "dashboard-container">
  <div class="header-container">
  <div class="logo-container">
    <div class="logo">
      <h1 class="logo-text">Expert<span class="trademark">&reg;</span></h1>
    </div>
    <?php include 'navigation.php';?>
  </div>
  </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
	<?php
		require_once "includes/connect.php";
		$sql = "SELECT tName, tCategory, tLocation, tPrice, tDescription from trainings WHERE tCategory = 'Brainstorm'";
		$result = $conn-> query($sql);
		echo '<h1 class = "title">Brainstorm</h1>';
		// Group the trainings by category
		$trainings_by_category = array();
		while ($row = $result->fetch_assoc()) {
				$category = $row['tCategory'];
				if (!isset($trainings_by_category[$category])) {
						$trainings_by_category[$category] = array();
				}
				$trainings_by_category[$category][] = $row;
		}

		foreach ($trainings_by_category['Brainstorm'] as $training){
				echo "<section class='training'>";
				echo "<div class='training-item'>";
				echo '<img class="image" src="img/seg1.jpg" alt="Training 1">';
				/*echo "<img class='image' src = img/'$imgPath'/>" . $row.["tName"];*/
				echo "<div class='training-info'>";
				echo "<h3>" . $training["tName"] . "</h3>";
				echo "<p>" . $training["tDescription"] . "</p>";
				echo "<p>Location: " . $training["tLocation"] . "</p>";
				echo "<p>Price: " . $training["tPrice"] . "</p>";
				/*enquire button*/
				echo '</div>';
				echo '</div>';
				echo '<br>';
				echo '<br>';
				echo '</section>';

		}
?>
<br>
<br>
<script src="script/transfer.js"></script>
</body>
</html>
