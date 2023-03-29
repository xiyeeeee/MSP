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
      <title>DELETE: Dota 2</title>
</head>
<body id="manage_page">
    <?php include 'navigation.php';?>

    <article>
        <?php echo "<p class='welcomeuser'>Welcome back, " . $_SESSION['useruid']?>
        <div class="manage_btn_menu">
            <button onclick="location.href='view_enquiries.php'" class="non_active_user">View Enquiries</button>
            <button onclick="location.href='change_password.php'" class="non_active_user">Change Users Password</button>
            <button onclick="location.href='users.php'" class="active_user">Manage Users Account</button>
        </div>
        <div class="delete-form">
            <?php
            $username = $_POST["selected_user_name"];

            echo "<p class='confirm-user'>Confirm delete user " . $username . "?</p>";
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


    <?php include 'footer.php';?>

    <script src="script/nav.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>
