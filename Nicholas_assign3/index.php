<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="description" content="Basic HTML elements"/>
      <meta name="keywords" content="HTML5, tags"/>
      <meta name="author" content="Nicholas"/>
      <meta http-equiv="Cache-control" content="no-cache">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="img/fav-icon.jpg" type="image/jpg">
      <link rel="stylesheet" href="css/style.css">
      <title>MAIN: Dota 2</title>
    </head>
<body id="bgimg1">

    <?php include 'navigation.php';?>

    <div class="homep">
    <h1 class="ti-title2">JOIN THE BATTLE OF THE ANCIENTS</h1>
    <p class="content">
        Every day, millions of players worldwide enter the battle as one of over a hundred Dota Heroes in a 5v5 team clash. Dota is the deepest multi-player action RTS game ever made and there's always a new strategy or tactic to discover. It's completely free to play and always will be – start defending your ancient now.
    </p>
  </div>
      <div class="slider">
          <div class="imgs_slides">
              <input type="radio" name="radio-btn" id="radio1" />
              <input type="radio" name="radio-btn" id="radio2" />
              <input type="radio" name="radio-btn" id="radio3" />
              <input type="radio" name="radio-btn" id="radio4" />

              <div class="first slide">
                  <a href="home.php">
                      <img src="img/1.jpg" alt="img1"/>
                      <div class="text-block">
                        <p>Intro</p>
                      </div>
                  </a>
              </div>
              <div class="slide">
                  <a href="characters.php">
                      <img src="img/2.jpg" alt="img2"/>
                      <div class="text-block">
                        <p>Heroes</p>
                      </div>
                  </a>
              </div>
              <div class="slide">
                  <a href="updates.php">
                      <img src="img/upd1.jpg" alt="img3"/>
                      <div class="text-block">
                        <p>Updates</p>
                      </div>
                  </a>
              </div>
              <div class="slide">
                  <a href="esports.php">
                      <img src="img/4.jpg" alt="img4" />
                      <div class="text-block">
                        <p>Esports</p>
                      </div>
                  </a>
              </div>

              <div class="navigation-auto">
                  <div class="auto-btn1"></div>
                  <div class="auto-btn2"></div>
                  <div class="auto-btn3"></div>
                  <div class="auto-btn4"></div>
              </div>

              <div class="navigation-manual">
                  <label for="radio1" class="navigation-btn"></label>
                  <label for="radio2" class="navigation-btn"></label>
                  <label for="radio3" class="navigation-btn"></label>
                  <label for="radio4" class="navigation-btn"></label>
              </div>

          </div>
        </div>
        <div class="homep">
        <h1 class="ti-title2">THE DOTA PRO CIRCUIT</h1>
        <p class="content">
          When not climbing the ranks, you'll be able to learn from the best. The Dota Pro Circuit features ultra-high-level Dota 2 competition streaming regularly in the game client, on Twitch and Steam.TV. Culminating in the largest e-sports championship in the world, The International, professional Dota 2 is an event not to be missed.
        </p>
        </div>
        <br>
        <br>
        <div class="clock">
            <span class="clock-time"></span>
            <span class="clock-ampm"></span>
          </div>
        <br>
        <br>
        <br>
        <br>
        <?php include 'footer.php';?>
        <script src="script/clock.js"></script>
        <script src="script/slide.js"></script>
        <script src="script/nav.js"></script>
        <script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
</body>
</html>
