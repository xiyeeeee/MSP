<?php
// Define a variable for the page title
$pageTitle = "Dashboard";
?>

<!-- Start of HTML code -->
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script src="script.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>

      <div class="header-container">
  <div class="logo-container">
    <div class="logo">
      <h1 class="logo-text">Expert<span class="trademark">&reg;</span></h1>
    </div>
    <nav class="navbar">
      <ul>
        <li class="dropdown">
          <a href="#">Training Management<i class="fas fa-bicycle"></i></a>
        </li>
        <li><a href="#">Request Management<i class="fas fa-comments"></i></a></li>
        <li><a href="#">Booking Management<i class="fas fa-calendar"></i></a></li>
        <li><a href="dashboard.php">Home <i class="fas fa-home"></i></a></li>
        <li class="dropdown">
          <a href="#">Category <i class="fas fa-bars"></i></a>
          <div class="dropdown-content">
            <a href="#">Category 1</a>
            <a href="#">Category 2</a>
            <a href="#">Category 3</a>
            <a href="#">Category 4</a>
          </div>
        </li>
        <li class="navbar-item"><a href="login.php">Logout <i class="fas fa-user-circle"></i></a></li>
      </ul>
    </nav>
  </div>
</div>

    <!--<div class="dashboard">
        <a href="#">
        <div class="category">
          <div class="slideshow">
            <img src="./img/TrainingManagement.png">

            <img src="./img/FileManagement2.png">
          </div>
          <h2 class= training-heading>Training Management</h2>
        </div>
    </a>


    <a href="test.html">
        <div class="category">
          <div class="slideshow">
            <img src="./img/RequestManagement2.png">

            <img src="./img/RequestManagement3.png">
          </div>
          <h2 class= training-heading>Request Management</h2>
        </div>
        </a>


        <a href="test.html">
        <div class="category">
          <div class="slideshow">

            <img src="./img/OrderManagement.png">
            <img src="./img/OrderManagement2.png">
          </div>
          <h2 class= training-heading>Booking Management</h2>
        </div>
    </a>


        <a href="test.html">
        <div class="category">
          <div class="slideshow">
            <img src="./img/FileManagement.png">

            <img src="./img/FileManagement3.png">
          </div>
          <h2 class= training-heading>Itinerary Management</h2>
        </div>
    </a>

        <br>
        <br>
        <br>



      </div>-->
      <div class="dashboard">
        <a href="test.html">
        <div class="category">
          <div class="slideshow">
            <img src="./img/volleyball.jpg">

            <img src="./img/swimming.jpg">
          </div>
          <h2 class= my-heading>Training</h2>
        </div>
    </a>


    <a href="test.html">
        <div class="category">
          <div class="slideshow">
            <img src="./img/paymenthd.jpg">

            <img src="./img/paymenthd2.png">
          </div>
          <h2 class= my-heading >Payment</h2>
        </div>
        </a>


        <a href="test.html">
        <div class="category">
          <div class="slideshow">

            <img src="./img/ChatManagement2.png">
            <img src="./img/livechat.jpeg">
          </div>
          <h2 class= my-heading>Chat with us</h2>
        </div>
    </a>


        <a href="test.html">
        <div class="category">
          <div class="slideshow">
            <img src="./img/itinerary.png">

            <img src="./img/itinerary2.png">
          </div>
          <h2 class= my-heading>Itinerary</h2>
        </div>
    </a>

        <br>
        <br>
        <br>



      </div>
      <div class="new-section">
        <div class="left-column">
        <p>Introduction of the company. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel viverra diam, eu luctus odio. Sed sed aliquam leo. Nam commodo augue sit amet neque varius vehicula. Nunc laoreet dolor nec nunc suscipit, vel porttitor ipsum laoreet. Fusce maximus suscipit pretium. Duis a enim at turpis dignissim maximus. Nullam congue erat ut diam hendrerit, nec convallis turpis bibendum. Donec ultrices, neque id aliquet malesuada, urna augue sodales lectus, eu porttitor urna leo at orci. Pellentesque fringilla finibus ex, id scelerisque lectus dignissim et.</p>
    </div>
    <div class="right-column">
  <div class="slideshow-container">
  <iframe src="https://www.youtube.com/embed/YvrKIQ_Tbsk?autoplay=1&rel=0&mute=1" width="560" height="315" title="Cardio vs. strength training: What you need to know" frameborder="0" allowfullscreen></iframe>
</div>

      </div>
      </div>

      <footer>
    <div class="footer-container">
      <div class="footer-column">
        <ul class="footer-nav">
          <li><a href="#">Training</a></li>
          <li><a href="#">Payment</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Account</a></li>
        </ul>
        <p class="footer-info">Phone: 123-456-7890 | Address: 123 Main St. | Email: info@expert.com</p>
        <div class="footer-logo">

          <p class="footer-copyright">Expert Training since 2023 &#169; </p>
        </div>
      </div>
      <div class="footer-column">
        <ul class="social-icons">
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>
  </div>


</body>
</html>
