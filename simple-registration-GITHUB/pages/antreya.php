<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../include/checklogin.php";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <link rel="icon" href="../images/swords.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../css/antreya.css">
  </head>
  <body>

    <!--NAVBAR-->
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="navbar_background">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active text-light font-weight-bold" href="home.php">Home</a>
                  </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="about.php">About</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link text-light" href="portfolio.php">Portfolio</a>
                              </li>
                            <li class="nav-item">
                          <a class="nav-link text-light" href="tos.php">ToS</a>
                        </li>
                      <li class="nav-item">
                    <a class="nav-link text-light" href="contact.php">Contact</a>
                  </li>
                <li class="nav-item">
              <a class="nav-link text-light" href="antreya.php">Antreya</a>
            </li>
            <a href="Admin/index.html">
              <button class="btn my-2 my-sm-0 admin" type="submit">Admin</button>
            </a>
          </ul>
      </div>
    </div>
      <nav class="navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span>
            <img class="float-left" id="menu_icon" src="../images/menu_icon.png">
          </span>
        </button>
      </nav>
    </div>
    <!--NAVBAR-->

    <!--portfolio-->
<div class="container text-light text-center">
  <h1 id="portfolio">Antreya Chronicles Online</h1>
    <p id ="portfolio-description">
      Antreya Chronicles Online is an MMORPG set in a post-apocalyptic, medieval, steampunk world ravaged by Spirit Beasts, and contains civilization trying to rebuild itself. Meanwhile, a sinister plot seems to be unfolding in secret and unless somebody steps in, evil could overcome the land of Antreya once again!
        </p>
          <a href="http://www.antreya-chronicles.com/about/">
            <button type="button" class="btn btn-outline-info">Know more</button>
              </a>
</div>
<br>
  <div class="container">
    <div class="row">

      <div class="col">
        <div class="card cards_background" style="width: auto";>
          <a href="https://cdn.discordapp.com/attachments/533461781331443733/533461930573299713/maul_concept_basic_coloring.png">
            <img id="concept_image" src="../images/maul_concept.png" class="card-img-top">
              </a>
                <div class="card-body">
                  <h6 class="card-title">Januar concept</h6>
                    <p class="card-text">A Maul concept from december Januar 2019</p>
                      </div>
                        </div>
      </div>
      <div class="col">
        <div class="card cards_background" style="width: auto";>
          <img id="concept_image" src="../images/thor_emote.png" class="card-img-top">
            <div class="card-body">
              <h6 class="card-title">Emote</h6>
                <p class="card-text">ThortheBeastDK rework of his original concept.</p>
                  </div>
                    </div>
      </div>
      <div class="col">
        <div class="card cards_background" style="width: auto";>
          <a href="https://cdn.discordapp.com/attachments/467496427900108821/528613009191600149/Fulleffect.png">
            <img id="concept_image" src="../images/fulleffect.png" class="card-img-top">
              </a>
                <div class="card-body">
                  <h6 class="card-title">December 2018</h6>
                    <p class="card-text">Steampunk breastplate <a href="http://www.antreya-chronicles.com/">Antreya Chronicles</a></p>
                      </div>
                        </div>
      </div>
      <div class="col">
        <div class="card cards_background" style="width: auto";>
          <a href="https://cdn.discordapp.com/attachments/413882234378911745/535504982921969664/BowX5_sketch.png">
            <img id="concept_image" src="../images/bowx5.png" class="card-img-top">
              </a>
                <div class="card-body">
                  <h6 class="card-title">2D concept artist</h6>
                    <p class="card-text">Bows <a href="http://www.antreya-chronicles.com/">Antreya Chronicles</a></p>
                      </div>
                        </div>
    </div>
  </div>
</div>
-->
<div class="container main-box-codes">
  <div class="row text-white text-center pos">
    <div class="container image-objects">
      <div class="row text-white text-center">
      </div>
    </div>
  </div>
</div>
    <!--Bootstrap-->
    <?php include("../include/footer.php") ?>
    <!--Bootstrap-->
  </body>
</html>
