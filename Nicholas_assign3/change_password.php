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
      <title>PASSWORD: Dota 2</title>
</head>
<body id="manage_page">
    <?php include 'navigation.php';?>

    <article>
        <?php echo "<p class='welcomeuser'>Welcome back, " . $_SESSION['useruid']?>
        <div class="manage_btn_menu">
            <button onclick="location.href='view_enquiries.php'" class="non_active_user">View Enquiries</button>
            <button onclick="location.href='change_password.php'" class="active_user">Change Users Password</button>
            <button onclick="location.href='users.php'" class="non_active_user">Manage Users Account</button>
        </div>
        <div class="change-password-form">
            <h2>Change Password</h2>
            <form action="includes/change_pw.inc.php" method="post">
                <input type="password" name="old_pass" placeholder="Old Password" />
                <input type="password" name="new_pass" placeholder="New Password" />
                <input type="password" name="new_pass_repeat" placeholder="Repeat New Password" />
                <button type="submit" name="change_pass">Change Password</button>
            </form>
            <?php
                if (isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput"){
                        echo "<p>Fill in all fields!</p>";
                    }
                    else if ($_GET["error"] == "wrongoldpassword"){
                        echo "<p>Wrong old password!</p>";
                    }
                    else if ($_GET["error"] == "passwordmatchold"){
                        echo "<p>New password is the same as the old password!</p>";
                    }
                    else if ($_GET["error"] == "passwordnotsame"){
                        echo "<p>Password do not match!</p>";
                    }
                    else if ($_GET["error"] == "stmtfailed"){
                        echo "<p>Something went wrong, try again!</p>";
                    }
                    else if ($_GET["error"] == "none"){
                        echo "<p>Password Changed!</p>";
                    }
                }
            ?>
        </div>


    </article>


    <?php include 'footer.php';?>

    <script src="script/nav.js"></script>
    <script src="script/manage.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>
