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
                <button onclick="location.href='users.php'">Return</button>
            </form>
        </div>
    </article>
    <script src="script/nav.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>
