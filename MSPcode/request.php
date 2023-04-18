<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body id="reqbg">

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
        $sql = "CREATE TABLE IF NOT EXISTS requests (
            name VARCHAR(30) NOT NULL,
            training VARCHAR(128) NOT NULL,
            tlocation VARCHAR(256) NOT NULL,
            remark TEXT NOT NULL,
            status VARCHAR(16) NOT NULL
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

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Fail conection: " . $conn->connect_error);
    }

    $trainings = array();
    $sql = "SELECT tname, tlocation FROM trainings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        $trainings[] = array(
            "name" => $row["tname"],
            "location" => $row["tlocation"]
        );
        }
    }

    $defaultLocation = "";
    $training = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $training = $_POST["training"];
        $location = $_POST["location"];
        $remark = $_POST["remark"];

        $nameErr = $trainingErr = $locationErr = "";
        $isValid = true;

        if (empty($name)) {
        $nameErr = "Name is required";
        $isValid = false;
        }

        if ($training == "-") {
        $trainingErr = "Please choose Training";
        $isValid = false;
        } else {
            foreach ($trainings as $t) {
                if ($t["name"] == $training) {
                    $defaultLocation = $t["location"];
                    break;
                }
            }
        }

        if ($location == "-") {
          $locationErr = "Please choose Location";
          $isValid = false;
        }

        if ($isValid) {
        $status = "pending";
        $sql = "INSERT INTO requests (name, training, tlocation, remark, status) VALUES ('$name', '$training', '$location', '$remark', '$status')";

        if ($conn->query($sql) === TRUE) {
            echo "Your request is waiting to approve";
        } else {
            echo "Something is wrong, please try later" . $conn->error;
        }
        }
    }

    $conn->close();
	?>
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

  <form class="container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h2 class="center">Client Request Form</h2>
    <label for="name">Name:</label>
    <br>
    <br>
    <span class="error"><?php if (isset($nameErr)) { echo $nameErr; } ?></span>
    <span class="error"><?php if (isset($trainingErr)) { echo $trainingErr; } ?></span>
    <br><br>
    <label for="training">Training:</label>
    <select name="training" id="training">
      <option value="">-</option>
      <optgroup label="Segmentation Workshop">
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

            // Get trainings with the desired tCategory values
            $sql = "SELECT tName FROM trainings WHERE tCategory IN ('Segmentation Workshop')";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output each training as an option in the dropdown menu
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['tName'] . "'>" . $row['tName'] . "</option>";
                }
            }else {
              echo '<option value="-">-</option>';
            }

            // Close database connection
            $conn->close();
      ?>
      </optgroup>
      <optgroup label="Co-Creation Workshop">
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

            // Get trainings with the desired tCategory values
            $sql = "SELECT tName FROM trainings WHERE tCategory IN ('Co-Creation Workshop')";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output each training as an option in the dropdown menu
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['tName'] . "'>" . $row['tName'] . "</option>";
                }
            }else {
              echo '<option value="-">-</option>';
            }

            // Close database connection
            $conn->close();
      ?>
      </optgroup>
      <optgroup label="Consumer Brainstorm Workshop">
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

            // Get trainings with the desired tCategory values
            $sql = "SELECT tName FROM trainings WHERE tCategory IN ('Consumer Brainstorm Workshop')";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output each training as an option in the dropdown menu
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['tName'] . "'>" . $row['tName'] . "</option>";
                }
            }else {
              echo '<option value="-">-</option>';
            }

            // Close database connection
            $conn->close();
      ?>
      </optgroup>
      <optgroup label="Team Activation Workshop">
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

            // Get trainings with the desired tCategory values
            $sql = "SELECT tName FROM trainings WHERE tCategory IN ('Team Activation Workshop')";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output each training as an option in the dropdown menu
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['tName'] . "'>" . $row['tName'] . "</option>";
                }
            }else {
              echo '<option value="-">-</option>';
            }

            // Close database connection
            $conn->close();
      ?>
      </optgroup>
    </select>
    <span class="error"><?php if (isset($trainingErr)) { echo $trainingErr; } ?></span>
    <br><br>
    <label for="location">Location:</label>
    <select name="location" id="location">
      <option value="">Select</option>
      <option value="123 Main St.">123 Main St.</option>
      <option value="456 Oak Ave.">456 Oak Ave.</option>
      <option value="789 Yal liv.">789 Yal liv.</option>
      <option value="901 Ark gof.">901 Ark gof.</option>
    </select>
    <br><br>
	<label for="remark">Remark:</label>
    <textarea name="remark" id="remark"></textarea>


<input type="Submit" value="Submit">

<script>
  var trainingSelect = document.getElementById("training");
  var locationSelect = document.getElementById("location");

  trainingSelect.addEventListener("change", function() {
    var training = trainingSelect.value;

    if (training == "Target Market Segmentation Workshop") {

      locationSelect.value = "123 Main St.";
    } else if (training == "User Persona Segmentation Workshop") {

      locationSelect.value = "123 Main St.";
    } else if (training == "Product Positioning Segmentation Workshop") {

      locationSelect.value = "123 Main St.";
    } else if (training == "Product Innovation Co-Creation Workshop") {

      locationSelect.value = "456 Oak Ave.";
    } else if (training == "Service Experience Co-Creation Workshop") {
      
      locationSelect.value = "456 Oak Ave.";
    } else if (training == "Brand Storytelling Co-Creation Workshop") {
      
      locationSelect.value = "456 Oak Ave.";
    } else if (training == "Consumer Insight Brainstorm Workshop") {
      
      locationSelect.value = "789 Yal liv.";
    } else if (training == "Product Demand Brainstorm Workshop") {
      
      locationSelect.value = "789 Yal liv.";
    } else if (training == "Marketing Creative Brainstorm Workshop") {
      
      locationSelect.value = "789 Yal liv.";
    } else if (training == "Team Collaboration Activation Workshop") {
      
      locationSelect.value = "901 Ark gof.";
    } else if (training == "Team Culture Activation Workshop") {
      
      locationSelect.value = "901 Ark gof.";
    } else if (training == "Team Decision-Making Activation Workshop") {
      
      locationSelect.value = "901 Ark gof.";
    } else {
      locationSelect.value = "";
    }
  });
</script>

</form>
<br><br>
</body>
</html>
