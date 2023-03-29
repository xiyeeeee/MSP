<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Basic HTML elements"/>
  <meta name="keywords" content="HTML5, tags"/>
  <meta name="author" content="Nicholas"/>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/fav-icon.jpg" type="image/jpg">
  <link rel="stylesheet" href="css/style.css">
    <title>CONFIRMATION: Dota 2</title>
</head>

<body id="bgimg1">
<?php include 'navigation.php';?>

    <article>
        <?php
            $fname = $_POST["first_name"];
            $lname = $_POST["last_name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $street = $_POST["street"];
            $city = $_POST["city"];
            $state = $_POST["state"];
            $postcode = $_POST["postcode"];
            $subject = $_POST["subject"];
            $products = $_POST["products"];
            $comments = $_POST["comments"];

            echo "<h1 class='ti-title2'>Confirmation Page</h1>";
            echo "<p class='cfm'>This is the information that you entered:</p>";
            echo "<br>";
            echo "<br>";
            echo "<table class='content3' border='1'>";
            echo "<tr>";
            echo "<th>First Name</th>";
            echo "<td>" . $fname . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Last Name</th>";
            echo "<td>" . $lname . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Email</th>";
            echo "<td>" . $email . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Phone Number</th>";
            echo "<td>" . $phone . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Street Address</th>";
            echo "<td>" . $street . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>City / Town</th>";
            echo "<td>" . $city . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>State</th>";
            echo "<td>" . $state . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Postcode</th>";
            echo "<td>" . $postcode . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Subject</th>";
            echo "<td>" . $subject . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Products</th>";
            echo "<td>" . $products . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Comments</th>";
            echo "<td>" . $comments . "</td>";
            echo "</tr>";
            echo "</table>";
            echo "<br>";
            echo "<br>";
            echo "<form action='includes/enquiry_insert.inc.php' method='POST'>";
            echo '<input type="hidden" name="first_name" value="' . $fname . '"/>';
            echo '<input type="hidden" name="last_name" value="' . $lname . '"/>';
            echo '<input type="hidden" name="email" value="' . $email . '"/>';
            echo '<input type="hidden" name="phone" value="' . $phone . '"/>';
            echo '<input type="hidden" name="street" value="' . $street . '"/>';
            echo '<input type="hidden" name="city" value="' . $city . '"/>';
            echo '<input type="hidden" name="state" value="' . $state . '"/>';
            echo '<input type="hidden" name="postcode" value="' . $postcode . '"/>';
            echo '<input type="hidden" name="subject" value="' . $subject . '"/>';
            echo '<input type="hidden" name="products" value="' . $products . '"/>';
            echo '<input type="hidden" name="comments" value="' . $comments . '"/>';
            echo '<button class="margin" type="submit" name="confirm">Confirm enquiry</button>';
            echo "</form>"
        ?>
        <br>
        <button class="margin" onclick='location.href="enquiry.php"'>Return</button>
    </article>
    <?php include 'footer.php';?>
    <script src="script/nav.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>
