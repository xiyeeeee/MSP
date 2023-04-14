<!DOCTYPE html>
<html>
<head>
</head>
<body>
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
            email VARCHAR(50) NOT NULL,
            address VARCHAR(256) NOT NULL,
            training VARCHAR(128) NOT NULL,
            status VARCHAR(16) NOT NULL,
            CONSTRAINT requests_email_unique UNIQUE (email)
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
    $sql = "SELECT tname FROM trainings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        $trainings[] = $row["tname"];
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $training = $_POST["training"];

        $nameErr = $emailErr = $addressErr = $trainingErr = "";
        $isValid = true;

        if (empty($name)) {
        $nameErr = "Name is required";
        $isValid = false;
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $isValid = false;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $isValid = false;
            }
        }

        if (empty($address)) {
        $addressErr = "Address is required";
        $isValid = false;
        }

        if ($training == "-") {
        $trainingErr = "Please choose Training";
        $isValid = false;
        }

        if ($isValid) {
        $status = "pending";
        $sql = "INSERT INTO requests (name, email, address, training, status) VALUES ('$name', '$email', '$address', '$training', '$status')";

        if ($conn->query($sql) === TRUE) {
            echo "Your request is waiting to approve";
        } else {
            echo "Something is wrong, please try later" . $conn->error;
        }
        }
    }

    $conn->close();
?>

  <h2>Client Request Form</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <span class="error"><?php if (isset($nameErr)) { echo $nameErr; } ?></span>
    <br><br>

    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
    <span class="error"><?php if (isset($emailErr)) { echo $emailErr; } ?></span>
    <br><br>

    <label for="address">Address:</label>
    <input type="text" name="address" id="address">
    <span class="error"><?php if (isset($addressErr)) { echo $addressErr; } ?></span>
    <br><br>

    <label for="training">Training:</label>
    <select name="training" id="training">
    <option value="-">-</option>
    <?php foreach ($trainings as $t): ?>
        <option value="<?php echo $t; ?>"><?php echo $t; ?></option>
    <?php endforeach; ?>
    </select>
    <span class="error"><?php if (isset($trainingErr)) { echo $trainingErr; } ?></span>
    <br><br>

<input type="submit" value="submit">
</form>
</body>
</html>
