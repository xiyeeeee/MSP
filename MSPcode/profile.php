<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Basic HTML elements"/>
      	<meta name="keywords" content="HTML5, tags"/>
      	<meta name="author" content="Nicholas"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="img/fav-icon.jpg" type="image/jpg">
        <link rel="stylesheet" type="text/css" href="css/style.css">


        <title>PROFILE: ETMP</title>
    </head>
<body id="profilebg">
<button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>

<article>
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
    <br>
</article>
<section class="my-section">
<div class= "btn_outputs">
        <?php
            // Check if the user is logged in
            if (isset($_SESSION['usersuid'])) {

              // Get the username of the logged-in user
              $logged_in_user = $_SESSION['usersuid'];

              // Display the details of the logged-in user
              echo "<h1>User Details</h1>";
              echo "<p>Name: " . $logged_in_user['usersUid'] . "</p>";
              echo "<p>Email: " . $logged_in_user['email'] . "</p>";
              echo "<p>Registered Date: " . $logged_in_user['regDate'] . "</p>";
              echo "<p>Training Chosen: " . $logged_in_user['usersTraining'] . "</p>";
              echo "<p>Training Status: " . $logged_in_user['usersStatus'] . "</p>";
              // add more details as required
            } else {
              // If the user is not logged in, redirect to the login page
              header("Location:");
              exit();
            }
            $conn-> close();
        ?>
        
    </div>
    </section>
<br>
<br>
<script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
<script src="script/buttontop.js"></script>
</body>
</html>
