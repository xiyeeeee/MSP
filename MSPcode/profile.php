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
    <?php include 'navigation.php';?>
  </div>
  </div>

    <br>
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
