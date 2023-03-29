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
        <title>CHARACTERS: Dota 2</title>
</head>

<body id="bgimg3">

  <?php include 'navigation.php';?>

  <div class="homep">
    <h1>MY FAVOURITE HEROES</h1>
    <p>Heroes are the essential element of Dota 2, as the course of the match is dependent on their intervention. During a match, two opposing teams select five out of 123 heroes that accumulate Experience Experience and Gold Gold to grow stronger and gain new abilities in order to destroy the opponent's Ancient. Most heroes have a distinct role that defines how they affect the battlefield, though many heroes can perform multiple roles. A hero's appearance can be modified with equipment.
      There are currently 123 heroes in Dota 2 and here are four heroes that I love the most!</p>
  </div>
</div>
<br>
<br>
<section>
  <div class="content">
  <img src="img/invoker.jpg" alt="invoker" class="left">
  <h1 class="ti-title2">Invoker</h1>
  <p class="ti-p2">
    Carl, the Invoker, is a ranged intelligence hero who is very difficult to master. He is unique in that he possesses a total of 14 abilities in his arsenal; three of them - Quas, Wex, and Exort - are reagents and one is his special ultimate Invoke. The three abilities he learns throughout leveling up can have three instances, which serve as the basic ingredients or components for him to create a new ability using his ultimate. Once the reagents or elements are combined, he can invoke one out of ten different abilities. All of his invoked abilities are capable of a multitude of actions, from damaging enemies to aiding his allies, and even saving himself from danger. </p>
<button onclick="autofill('Invoker')">Enquire Now</button>
<br>
</div>
<br>
<div class="content">
  <img src="img/juggernaut.jpg" alt="juggernaut" class="right">
  <h1 class="ti-title2">Juggernaut</h1>
  <p class="ti-p2">
    Yurnero, the Juggernaut, is a melee agility hero whose abilities allow him to sprint into battle and recklessly devastate enemies in an impenetrable flurry of blades.
    His abilities grant invulnerability and spell immunity, turning him into an unstoppable force on a hairpin. Juggernaut is strong both offensively and defensively, and deals heavy damage both physical and magical with his Blade Fury and Omnislash ultimate, but he possesses below average strength and intelligence attributes, so he does not have as much health and mana as other heroes and is vulnerable when his abilities are on cooldown. For this reason, although his abilities make him powerful even in the early game, he cannot charge into forces without restraint until farmed and is usually played as a carry.</p>
<button onclick="autofill('Juggernaut')">Enquire Now</button>
<br>
</div>
<br>
<div class="content">
  <img src="img/morphling.jpg" alt="morphling" class="left">
  <h1 class="ti-title2">Morphling</h1>
  <p class="ti-p2">
    Morphling is a ranged agility hero that has many flexible abilities, item builds and is leveled as a very strong hard carry. He relies strongly on his attributes, and is an effective ganker. Unlike other agility carries that rely on physical attacks, he relies on his powerful abilities to initiate and shift into a state from which he can make a kill. Waveform lets him surge directly forward to a location, damaging enemies on his path, working both as a nuke or an escape. Adaptive Strike is a scaling two-part ability that blasts enemies with a jet of water, either stunning and knocking back or dealing damage. Its power is based on either agility or strength. Attribute Shift allows him to edit his physical being, switching it from Agility or Strength, transforming him into a strong damage dealer or a tank. His ultimate, Morph, transforms him into a copy of an enemy using their stats and basic abilities.</p>
<button onclick="autofill('Morphling')">Enquire Now</button>
<br>
</div>
<br>
<div class="content">
  <img src="img/fv.jpg" alt="fv" class="right">
  <h1 class="ti-title2">Faceless Void</h1>
  <p class="ti-p2">
    Darkterror, the Faceless Void, is a melee agility hero played as an offlaner or carry. Given a little time, he becomes a terrifying hero capable of destroying entire enemy teams in seconds.
    Wielding his cosmically powered mace, each blow can lock his foes in time, stopping them in place. He can jump into or out of combat using Time Walk while simultaneously reverting any damage he has taken in the last few seconds. Darkterror can also pause his foes' cooldowns with Time Dilation, lowering their movement speed in the process. His ultimate, Chronosphere, freezes time for everything within its area of effect, giving him time to pummel any enemies caught within without resistance for several seconds. It's one of the most devastating initiation spells in the game and can win team fights before his opponents can even react.</p>
<button onclick="autofill('Faceless Void')">Enquire Now</button>
<br>
</div>
</section>
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
<button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
<?php include 'footer.php';?>
</body>

<script src="script/buttontop.js"></script>
<script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
<script src="script/transfer.js"></script>
<script src="script/nav.js"></script>
<script src="script/clock.js"></script>
</html>
