<?php
session_start();
echo "<nav>";
echo '<div class="logo">';
echo '<h4><a href="index.php"><img src="img/logo.png" alt="Logo"></a></h4>';
echo '</div>';
echo '<ul class="nav-links">';
echo '<li><a href="index.php" class="position_main"><i class="fas fa-house-user"></i>Main</a>';
echo '<div class="sub-menu">';
echo '<ul>';
echo '<li><a href="home.php" class="position_home">Introduction</a></li>';
echo '<li><a href="characters.php" class="position_hero">Heroes</a></li>';
echo '<li><a href="updates.php" class="position_upd">Updates</a></li>';
echo '<li><a href="esports.php" class="position_esp">Esports</a></li>';
echo '</ul>';
echo '</div>';
echo '</li>';
echo '<li><a href="aboutme.php" class="position_abtme"><i class="fas fa-user"></i>Profile</a></li>';
echo '<li><a href="enquiry.php" class="position_enquiry"><i class="fas fa-id-card"></i>Enquiry</a></li>';
echo '<li><a href="disclaimer.php" class="position_disclaimer"><i class="fas fa-exclamation-triangle"></i>Disclaimer</a></li>';
echo '<li><a href="acknowledgement.php" class="position_ack"><i class="fas fa-book"></i>Acknowledgement</a></li>';
echo '<li><a href="enhancement.php" class="position_enhancement"><i class="fas fa-bolt"></i>Enhancements</a></li>';
if (isset($_SESSION["useruid"])){
    echo '<li><a href="view_enquiries.php" class="position_manage"><i class="fas fa-tasks"></i>Manage</a></li>';
    echo '<li><a href="includes/logout.inc.php"><i class="fas fa-sign-out-alt"></i>Log out</a></li>';
} else {
    echo '<li><a href="register.php" class="position_register"><i class="fas fa-user-plus"></i>Register</a></li>';
    echo '<li><a href="login.php" class="position_login"><i class="fas fa-sign-in-alt"></i>Login</a></li>';
}
echo '</ul>';
echo '<div class="burger">';
echo "<div class='line1'></div>";
echo "<div class='line2'></div>";
echo "<div class='line3'></div>";
echo "</div>";
echo "</nav>";

?>
