<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Basic HTML elements"/>
      	<meta name="keywords" content="HTML5, tags"/>
      	<meta name="author" content="Nicholas"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="img/fav-icon.jpg" type="image/jpg">
        <link rel="stylesheet" href="css/style1.css">


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
<nav class="navbar">
      <ul>
        <li class="dropdown">
          <a href="#">Training <i class="fas fa-bicycle"></i></a>
          <div class="dropdown-content">
            <a href="#">Menu</a>
            <a href="#">Request</a>
          </div>
        </li>
        <li><a href="#">Booking <i class="fas fa-cart-plus"></i></a></li>
        <li class="dropdown">
          <a href="profile.php">Profile <i class="fas fa-user"></i></a>
          <div class="dropdown-content">
            <a href="delete_acc.php">Delete Account</a>
            <a href="change_password.php">Change Password</a>
          </div>
        </li>
        <li><a href="client.php">Home <i class="fas fa-home"></i></a></li>
        <li class="dropdown">
          <a href="#">Category <i class="fas fa-bars"></i></a>
          <div class="dropdown-content">
            <a href="#">Category 1</a>
            <a href="#">Category 2</a>
            <a href="#">Category 3</a>
            <a href="#">Category 4</a>
          </div>
        </li>
        <li><a href="login.php">Logout <i class="fas fa-user-circle"></i></a></li>
      </ul>
    </nav>
  </div>

    <br>
    <div class="manage_btn_menu">
        <button onclick="location.href='profile.php'" class="active_user">Profile Info</button>
        <button onclick="location.href='change_password.php'" class="non_active_user">Change Password</button>
        <button onclick="location.href='delete_acc.php'" class="non_active_user">Delete Account</button>
    </div>


</article>
<section class="my-section">
<div class= "btn_outputs">
        <?php
            require_once 'includes/db.inc.php';
            $sql = "SELECT usersId, usersName, usersEmail, usersUid, regDate from users";
            $result = $conn-> query($sql);
            echo "<table class='user_table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "<th>Username</th>";
            echo "<th>Delete</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            if ($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()){
                    echo "<tr>";
                    echo "<td>" . $row["usersId"] . "</td>";
                    echo "<td>" . $row["usersName"] . "</td>";
                    echo "<td>" . $row["usersEmail"] . "</td>";
                    echo "<td>" . $row["usersUid"] . "</td>";
                    echo "<td>" . $row["regDate"] . "</td>";
                    echo "<td>";
                    echo '<input type="hidden" name="selected_user_id" value="' . $row["usersId"] . '"/>';
                    echo '<input type="hidden" name="selected_user_name" value="' . $row["usersUid"] . '"/>';
                    echo '<button type="submit" name="delete">Delete</button>';
                    echo '</form>';
                    echo "</td>";
                    echo "</tr>";
                }
            }
            echo "</tbody>";
            echo "</table>";

            if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyfields"){
                    echo "<script>alert('Some areas are blank. Deletion unsuccessful.')</script>";
                }
                else if ($_GET["error"] == "passworderror"){
                    echo "<script>alert('Unrecognized password. Deletion unsuccessful.')</script>";
                }
                else if ($_GET["error"] == "passwordnotsame"){
                    echo "<script>alert('Password and repeated password not match. Deletion unsuccessful.')</script>";
                }
                else if ($_GET["error"] == "none"){
                    echo "<script>alert('User deleted successfully.')</script>";
                }
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
