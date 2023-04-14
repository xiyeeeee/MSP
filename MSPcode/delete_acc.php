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
      <title>DELETE: ETMP</title>
</head>
<body id="profilebg">
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
</div>
<br>
<br>
<br>
<br>
<br>
        <div class="manage_btn_menu">
          <button onclick="location.href='profile.php'" class="non_active_user">Profile Info</button>
          <button onclick="location.href='change_password.php'" class="non_active_user">Change Password</button>
          <button onclick="location.href='delete_acc.php'" class="active_user">Delete Account</button>
        </div>
        <div class="delete-form">
            <?php
            $username = $_POST["selected_user_name"];

            echo "<p class='confirm-user'>Confirm Delete Account " . $username . "?</p>";
            echo "<p class='warning-delete'>Warning: This action cannot be undone!</p>";


            ?>
            <form action="includes/dlt.inc.php" method="post">
                <input type="password" name="pass" placeholder="Password" />
                <input type="password" name="pass_repeat" placeholder="Repeat Password" />
                <?php
                $userID = $_POST["selected_user_id"];
                $username = $_POST["selected_user_name"];
                echo '<input type="hidden" name="selected_user_id" value="' . $userID . '"/>';
                echo '<input type="hidden" name="selected_user_name" value="' . $username . '"/>';
                ?>
                <button type="submit" name="delete">Delete</button>
            </form>
        </div>
        <br>
    <br>
    <br>
    <br>
    </article>


    <script src="script/nav.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>
