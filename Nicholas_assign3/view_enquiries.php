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
        <title>VIEW: Dota 2</title>
</head>
<body id="manage_page">
    <?php include 'navigation.php';?>

    <article>
        <?php echo "<p class='welcomeuser'>Welcome back, " . $_SESSION['useruid']?>
        <div class="manage_btn_menu">
            <button onclick="location.href='view_enquiries.php'" class="active_user">View Enquiries</button>
            <button onclick="location.href='change_password.php'" class="non_active_user">Change Users Password</button>
            <button onclick="location.href='users.php'" class="non_active_user">Manage Users Account</button>
        </div>

        <div>
            <?php
                require_once 'includes/db.inc.php';
                $sql = "SELECT enq_FirstName, enq_LastName, enq_Email, enq_Phone, enq_Subject, enq_Products, enq_Comments, enq_Date from enquiry";
                $result = $conn-> query($sql);
                echo "<table border='1'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone</th>";
                echo "<th>Subject</th>";
                echo "<th>Products</th>";
                echo "<th>Comments</th>";
                echo "<th>Date</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row["enq_FirstName"] . "</td>";
                        echo "<td>" . $row["enq_LastName"] . "</td>";
                        echo "<td>" . $row["enq_Email"] . "</td>";
                        echo "<td>" . $row["enq_Phone"] . "</td>";
                        echo "<td>" . $row["enq_Subject"] . "</td>";
                        echo "<td>" . $row["enq_Products"] . "</td>";
                        echo "<td>" . $row["enq_Comments"] . "</td>";
                        echo "<td>" . $row["enq_Date"] . "</td>";
                        echo "</tr>";
                    }
                }
                echo "</tbody>";
                echo "</table>";


                $conn-> close();
            ?>

        </div>
    </article>


    <?php include 'footer.php';?>

    <script src="script/nav.js"></script>
    <script src="script/manage.js"></script>
    <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>
