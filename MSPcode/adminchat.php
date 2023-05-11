<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <div id="chatlog"></div>
    
    <form method="post" onsubmit="sendMessage(); return false;">
    <label for="name">Sender:</label>
        <input type="text" name="name" value="admin" readonly><br><br>
    <label for="recipient">To:</label>
    <select name="recipient" id="userUid" value="<?php echo $user_name ?>">
<br><br>
        <label for="recipient">To:</label>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "expert_db";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT usersUid FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($user_name == $row['usersUid']){
                      echo "<option value='" . $row['usersUid'] ."'" . " selected" . ">" . $row['usersUid'] . "</option>";
                    }else{
                      echo "<option value='" . $row['usersUid'] . "'>" . $row['usersUid'] . "</option>";
                    }
                }
            }
            // Close database connection
            $conn->close();
      ?>
    </select><br><br>
        <label for="message">Message:</label>
        <textarea name="message"></textarea><br><br>
        <input type="submit" value="Send">
    </form>
    
    <script>
        function refreshChatLog() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("chatlog").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "chat.php", true);
            xhr.send();
        }
        setInterval(refreshChatLog, 1000);
        
        function sendMessage() {
            var form = document.querySelector("form");
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    form.reset();
                }
            };
            xhr.open("POST", "chat.php", true);
            xhr.send(new FormData(form));
        }
    </script>
</body>
</html>
