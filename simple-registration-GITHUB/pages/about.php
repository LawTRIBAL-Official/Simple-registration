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
    <title>ABOUT ME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../css/about.css">
  </head>
  <body>


    <!--NAVBAR-->
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="navbar_background">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-light" href="home.php">Home</a>
                  </li>
                    <li class="nav-item">
                      <a class="nav-link active text-light font-weight-bold" href="about.php">About</a>
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

    <div id="contact-text" class="container">
      <div style="text-align:center">
        <h2>Contact Me</h2>
        <p>Swing by for a cup of coffee, or leave me a message:</p>
      </div>
      <div class="row">
        <div class="column">
          <img src="../images/uwu.png" style="width:100%">
        </div>
        <div class="column">
          <p><b>Name:</b> Alexander Westersø Pedersen</p>
          <p><b>Email:</b> Alexanderwest.pedersen@gmail.com</p>
          <p><b>Discord:</b> LawTRIBAL#5805</p>
          <p><a href="https://steamcommunity.com/id/LawTRIBAL">Steam</a></p>
          <p><a href="https://steamcommunity.com/id/LawTRIBAL/myworkshopfiles/?appid=730">Steam Workshop</a></p>
        </div>
      </div>
    </div>







    <!--Bootstrap-->
    <?php include("../include/footer.php") ?>
    <!--Bootstrap-->













    <!--Bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!--Bootstrap-->
  </body>
</html>
