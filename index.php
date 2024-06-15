<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>movie design</title>
  <!-- links for the css and fonts -->
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family*roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <title>
    movie design
  </title>

</head>

<?php
//http://localhost/movie/login
?>

<body>
  <!-- navbar -->
  <div class="navbar">
    <div class="navbar-container">
      <div class="logo-container">
        <h1 class="logo">stanzy</h1>
      </div>
      <div class="menu-container">
        <ul class="menu-list">
          <li class="menu-list-items active">Home</li>
          <li class="menu-list-items">
            <h4><a style="color:wheat; text-decoration: none;" href="./movies.php">Movies</a></h4>
          </li>
          <li class="menu-list-items">Series</li>
          <li class="menu-list-items">Popular</li>
          <li class="menu-list-items">Trends</li>
        </ul>
      </div>
      <!-- profile & dark\white mode -->
      <div class="profile-container">
        <img class="profile-picture" src="pics/221.png">
        <div class="profile-text-container">
          <span class="profile-text">
            <h4><a style="color: white; text-decoration: none;" href="profile.html">Profile</a></h4>
          </span>
          <i class="fas fa-caret-down"></i>
        </div>

        <div class="toggle">
          <i class="fas fa-moon toogle-icon"></i>
          <i class="fas fa-sun toogle-icon"></i>
          <div class="toggle-ball"></div>
        </div>
        <div class="login">
          <h4><a style="text-decoration: none; padding: 15px;" href="login.html">login & signup</a></h4>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar -->
  <div class="sidebar">
    <i class="left-menu-icon fas fa-search"></i>
    <i class="left-menu-icon fas fa-home"></i>
    <i class="left-menu-icon fas fa-users"></i>
    <i class="left-menu-icon fas fa-bookmark"></i>
    <i class="left-menu-icon fas fa-tv"></i>
    <i class="left-menu-icon fas fa-hourglass-start"></i>
    <i class="left-menu-icon fas fa-shopping-cart"></i>
  </div>
  <!-- background image or banner -->
  <div class="container">
    <div class="content-container">
      <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('./pics/avatar.jpg')no-repeat; background-size: cover; background-position: center;">

        <img class="featured-title" src="./pics/27.png" alt="">
        <p class="featured-desc">A Young Boy Known As The Avatar must master <br> the four elemental powers to save the
          world and <br> fight aganist an enemy bent on stopping him</p>
        <button class="featured-button">WATCH</button>
      </div>
      <!-- movie slider 1 -->
      <div class="movie-list-container">
        <h1 class="movie-list-title">DC TRENDS</h1>
        <div class="movie-list-wrapper">
          <div class="movie-list">
            <div class="movie-list-item">
              <img class="movie-list-item-img" src="./pics/batman.jpg" alt="">
              <span class="movie-list-item-title">BATMAN </span>
              <p class="movie-list-item-desc">When a sadist serial killer begins murdering political figures in Gotham,
                Batman is forced to investigate the city's hidden corruption and question his family's involvement.</p>

              <button class="movie-list-item-button">WATCH</button>
            </div>

            <div class="movie-list-item">
              <img class="movie-list-item-img" src="./pics/aqua.jpg" alt="">
              <span class="movie-list-item-title">AQUAMAN </span>
              <p class="movie-list-item-desc">The son of a lighthouse keeper and an Atlantean queen, Arthur Curry is the
                bridge between the surface world and his tumultuous realm of the sea.
              </p>
              <button class="movie-list-item-button">WATCH</button>
            </div>

            <div class="movie-list-item">
              <img class="movie-list-item-img" src="./pics/shazzam.jpg" alt="">
              <span class="movie-list-item-title">SHAZAM </span>
              <p class="movie-list-item-desc">After being abandoned at a fair, Billy constantly searches for his mother.
                His life, however, takes a huge turn when he inherits superpowers from a powerful wizard.</p>
              <button class="movie-list-item-button">WATCH</button>
            </div>

            <div class="movie-list-item">
              <img class="movie-list-item-img" src="./pics/super.jpg" alt="">
              <span class="movie-list-item-title">SUPER MAN </span>
              <p class="movie-list-item-desc">A young boy learns that he has extraordinary powers and is not of this
                Earth. As a young man, he journeys to discover where he came from and what he was sent here to do.</p>
              <button class="movie-list-item-button">WATCH</button>
            </div>

            <div class="movie-list-item">
              <img class="movie-list-item-img" src="./pics/batiman.jpg" alt="">
              <span class="movie-list-item-title">Her </span>
              <p class="movie-list-item-desc">jdhfhdjdjhdjfjfjjdjjfjrruurururururu.</p>
              <button class="movie-list-item-button">WATCH</button>
            </div>

            <div class="movie-list-item">
              <img class="movie-list-item-img" src="./pics/FB10.jpg" alt="">
              <span class="movie-list-item-title">Her </span>
              <p class="movie-list-item-desc">jdhfhdjdjhdjfjfjjdjjfjrruurururururu.</p>
              <button class="movie-list-item-button">WATCH</button>
            </div>

            <div class="movie-list-item">
              <img class="movie-list-item-img" src="./pics/FB11.jpg" alt="">
              <span class="movie-list-item-title">Her </span>
              <p class="movie-list-item-desc">jdhfhdjdjhdjfjfjjdjjfjrruurururururu.</p>
              <button class="movie-list-item-button">WATCH</button>
            </div>

            <div class="movie-list-item">
              <img class="movie-list-item-img" src="./pics/FB12.jpg" alt="">
              <span class="movie-list-item-title">Her </span>
              <p class="movie-list-item-desc">jdhfhdjdjhdjfjfjjdjjfjrruurururururu.</p>
              <button class="movie-list-item-button">WATCH</button>
            </div>
          </div>
          <p class="fas fa-chevron-right arrow"></p>
        </div>

        <!-- movie slider 2 -->
        <div class="movie-list-container">
          <h1 class="movie-list-title">MARVEL TRENDS</h1>
          <div class="movie-list-wrapper">
            <div class="movie-list">
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="./pics/THE-MARVELS.jpg" alt="">
                <span class="movie-list-item-title">The Marvels </span>
                <p class="movie-list-item-desc">Captain Marvel is an extraterrestrial Kree warrior who finds herself
                  caught in the middle of an intergalactic battle between her people and the Skrulls.</p>
                <button class="movie-list-item-button">WATCH</button>
              </div>



              <div class="movie-list-item">
                <img class="movie-list-item-img" src="./pics/dcs.jpg" alt="">
                <span class="movie-list-item-title">Doctor Strange </span>
                <p class="movie-list-item-desc">A neurosurgeon with a destroyed career sets out to repair his hands only
                  to find himself.</p>
                <button class="movie-list-item-button">WATCH</button>
              </div>


              <div class="movie-list-item">
                <img class="movie-list-item-img" src="./pics/TH.jpg" alt="">
                <span class="movie-list-item-title">THOR</span>
                <p class="movie-list-item-desc">The powerful but arrogant god Thor is cast out of Asgard to live amongst
                  humans in Midgard (Earth), where he soon becomes one of their finest defenders.</p>
                <button class="movie-list-item-button">WATCH</button>
              </div>


              <div class="movie-list-item">
                <img class="movie-list-item-img" src="./pics/black widow.jpg" alt="">
                <span class="movie-list-item-title">BLACK WIDOW </span>
                <p class="movie-list-item-desc">black widow confronts the darker parts of her ledger when a dangerous
                  conspiracy with ties to.</p>
                <button class="movie-list-item-button">WATCH</button>
              </div>

              <div class="movie-list-item">
                <img class="movie-list-item-img" src="./pics/FB9.jpg" alt="">
                <span class="movie-list-item-title">QUANTUMANIA </span>
                <p class="movie-list-item-desc">Scott Lang and Hope Van Dyne are dragged into the Quantum Realm, along
                  with Hope's parents and Scott's daughter Cassie. Together they must find a way to escape.</p>
                <button class="movie-list-item-button">WATCH</button>
              </div>

              <div class="movie-list-item">
                <img class="movie-list-item-img" src="./pics/FB10.jpg" alt="">
                <span class="movie-list-item-title">Her </span>
                <p class="movie-list-item-desc">jdhfhdjdjhdjfjfjjdjjfjrruurururururu.</p>
                <button class="movie-list-item-button">WATCH</button>
              </div>

              <div class="movie-list-item">
                <img class="movie-list-item-img" src="./pics/FB11.jpg" alt="">
                <span class="movie-list-item-title">Her </span>
                <p class="movie-list-item-desc">jdhfhdjdjhdjfjfjjdjjfjrruurururururu.</p>
                <button class="movie-list-item-button">WATCH</button>
              </div>


              <div class="movie-list-item">
                <img class="movie-list-item-img" src="./pics/FB12.jpg" alt="">
                <span class="movie-list-item-title">Her </span>
                <p class="movie-list-item-desc">jdhfhdjdjhdjfjfjjdjjfjrruurururururu.</p>
                <button class="movie-list-item-button">WATCH</button>
              </div>
            </div>
            <p class="fas fa-chevron-right arrow"></p>
          </div>
        </div>
        <!-- banner 2 -->
        <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('./pics/won woman.jpg')">


          <img class="featured-title" src="./pics/WW.logo.png" alt="">
          <p class="featured-desc">When a pilot crashes and tells of conflict in the outside<br> world Diana, an
            Amazonian warrior in training, leaves <br> home to fight a war, discovering her full powers and <br>true
            destiny.</p>
          <button class="featured-button">WATCH</button>
        </div>
      </div>


    </div>
  </div>
  </div>
  </div>
  </div>
  <marquee style="height:250px; padding: 10px; background-color:#000; color:gold; font-size: 40px; ">
    <img src="./pics/aqua.jpg" alt="">
    <img src="./pics/aqua.jpg" alt="">
    <img src="./pics/aqua.jpg" alt="">
    <img src="./pics/aqua.jpg" alt="">
    <img src="./pics/aqua.jpg" alt="">
    <img src="./pics/aqua.jpg" alt="">
    <img src="./pics/aqua.jpg" alt="">

  </marquee>
  <script src="movie.js"></script>

</body>

</html>