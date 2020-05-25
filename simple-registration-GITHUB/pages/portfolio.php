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
    <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../css/portfolio.css">
  </head>
  <body>
      <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="navbar_background">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link text-light" href="home.php">Home</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link text-light" href="about.php">About</a>
                          </li>
                            <li class="nav-item">
                              <a class="nav-link active text-light font-weight-bold" href="portfolio.php">Portfolio</a>
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
<!--portfolio-->
<div class="container side-tweets">
    <?php if(!empty($feedData)){ ?>
    <?php
      //Get user info
        $profilePic = str_replace("normal" , "32x32", $feedData[0]->user->profile_image_url_https);
        $userName = $feedData[0]->user->screen_name;
        $userScreenName = $feedData[0]->user->screen_name;
        $tweetNum = $feedData[0]->user->statuses_count;
        $followerNum = $feedBack[0]->user->follower_count;
      }
    ?>
</div>
  <div class="main-description container main-text pos text-white text-center">
      <h1>PROGARMMING PROJECTS</h1>
</div>
<div class="container main-box-codes">
  <div class="row text-white text-center pos">
    <div class="container image-objects">
      <div class="row text-white text-center">
        <!--Colons-->
    <div class="col">
      <div class="container container-header">
        <h5 id="My_HTML_PhP">HTML + PhP</h5>
          </div>
            <div class="images">
              <img id="html_image_1" src="../images/php1.png" alt="">
                <img id="html_image_2" src="../images/php2.png" alt="">
                  <img id="html_image_3" src="../images/index.png" alt="">
                    </div>
                      </div>
    <div class="col">
      <div class="container container-header">
        <h5 id="MyCSS">CSS</h5>
          </div>
            <div class="images">
              <img id="css_image_1" src="../images/index.png" alt="">
                <img id="css_image_2" src="../images/index.png" alt="">
                  <img id="css_image_3" src="../images/index.png" alt="">
                    </div>
                      </div>
        <!--Colons end-->
      </div>
    </div>
  </div>
</div>
<!--portfolio-->


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
