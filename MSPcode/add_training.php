<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<title>TRAINING: ETMP</title>
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
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php
	require_once "includes/connect.php";

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
			$target_dir = "img/";
			$target_file = $target_dir . $_POST["tName"] . ".png";
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if(isset($_FILES["fileToUpload"]["tmp_name"])){
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
			} else {
					echo "File is not an image.";
					$uploadOk = 0;
			}

			if (file_exists($target_file)) {
					echo "Sorry, training already exists.";
					$uploadOk = 0;
			}

			if ((!isset($_POST["tName"]) && !isset($_POST["tCategory"]) && !isset($_POST["tLocation"]) && !isset($_POST["tDescription"]) && !isset($_POST["tPrice"]))){
					echo "Please fill in all fields";
					$uploadOk = 0;
			}

			if ($uploadOk == 0) {
					echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
					$tName = $_POST["tName"];
					$tCategory = $_POST["tCategory"];
					$tLocation = $_POST["tLocation"];
					$tDescription = $_POST["tDescription"];
					$tPrice = $_POST["tPrice"];

					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
						echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
						$sql = "INSERT INTO trainings (tName, tCategory, tLocation, tDescription, tPrice)
									SELECT * FROM (SELECT '$tName', '$tCategory', '$tLocation', '$tDescription', '$tPrice') AS tmp
									WHERE NOT EXISTS(
						SELECT tName FROM trainings WHERE tName = '$tName') LIMIT 1";

					mysqli_query($conn, $sql);
					if ( mysqli_affected_rows($conn)>0){
							echo "Records inserted successfully.";
					}else{
					echo "There is an existing training. Please use a different number";
					}
					} else {
						echo "Sorry, there was an error adding the training.";
					}
				}
			}else{
					echo "Please fill in all fields.";
			}


			}

	?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

			<p><label for="fileToUpload">Image: </label>
			<input type="file" name="fileToUpload" id="fileToUpload"/></p>

			<p><label for="tName">Training Name: </label>
			<input type="text" name="tName" id="tName"/></p>

			<p><label for="tCategory">Training Category: </label>
			<select name="tCategory" id="tCategory">
					<option value="segmentation">Segmentation Workshop</option>
					<option value="co-creation">Co-creation Workshop</option>
					<option value="brainstorm">Brainstorm Workshop</option>
					<option value="teamActivation">Team Activation Workshop</option>
			</select></p>

			<p><label for="tLocation">Training Location: </label>
			<input type="text" name="tLocation" id="tLocation"/></p>

			<p><label for="tPrice">Training Price: </label>
			<input type="text" name="tPrice" id="tPrice"/></p>

			<p><label for="tDescription">Training Description: </label>
			<input type="text" name="tDescription" id="tDescription"/></p>

			<p><input type="submit" value="Add" name="submit"/></p>
	</form>
</body>
</html>
