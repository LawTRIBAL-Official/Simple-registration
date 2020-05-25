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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../css/home.css">
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

    <div class="main-description container text-white text-center">
        <div class="pos">
          <form>
            <h1>LAWTRIBAL DESIGNS</h1>
            <div id="concept-description"  class="container phrase-main">
              <p class="text-center" id="text-concept">CONCEPT ART, DESIGN, CS:GO MAPS, IDEAS, DATATECHNICIAN</p>
            </div>
            <p class="text-center">
              Welcome to my website. I'm a datatechnician student looking for an internship, working with PhP, C# and Python. I do concept art and level-design/mapping in CS:GO. As well as owning a community, which you can see on the page <a href="pages/steamcommunity.php">here.<a>
            </p>
            <img src="../images/logo_emote.png">
          </form>
    </div>
    <!--Bootstrap-->
    <?php include("../include/footer.php") ?>
    <!--Bootstrap-->
  </body>
</html>
