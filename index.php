<?php

if(isset($_GET['not_logged_in'])){
  echo '<script>window.location = "login?not_logged_in=true";</script>';
}


?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skiyen</title>
    <link rel="shortcut icon" type="text/css" href="logo/skiyen.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Create an account or log into Skiyen. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.">
    <meta name="author" content="Okeke Divine-Vessel">
    <meta name="google-site-verification" content="eDDZHpLjtAQr6Mr4tcyjEMlx8_JqM5Qb8L_-gU_r_OA" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font/css/all.css">
    <link rel="stylesheet" href="css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="css/owl.css">
  </head>

  <body>

     <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> 

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#"><h2>Skiyen</h2></a>
          
          <div class="functional-buttons">
            <ul>
              <li><a href="login"><i class="fa fa-lock"></i> Log in</a></li>
              <li><a href="register/"><i class="fa fa-user-plus"></i> Sign Up</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
              <h2>Join Skiyen today and get linked with your friends and family online</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->


<br>

    <!-- Services Starts Here -->

    <div class="services-section">      
      <div class="container">
        <div class="row">
         
         <!--  <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
             <img src="logo/s1.png">
              <h4>Skiyen</h4>
              <p>Skiyen helps you to connect with friends and family, find communities and grow businesses.</p>
            </div>
          </div> -->

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-comments"></i>
              <h4>Chat</h4>
              <div class="osmsijd">
                <p>We provide you with an end to end encrypted private message with people you follow and people that follow you...</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-gamepad"></i>
              <h4>Play Games</h4>
              <p>On skiyen you can play your favourite games here bookmark games,save games and lots more...</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-play-circle"></i>
              <h4>Watch Videos</h4>
              <p>Follow people, groups, pages, etc to watch interesting videos with less data...</p>
            </div>
          </div>





        </div>

      </div>

    </div>
    


    <!-- Services Ends Here -->




    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="js/custom.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/accordions.js"></script>

    <script language = "text/Javascript">
    function scroll(){
      $('html,body').animate({
        scrollTop:0;
      });
    } 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
<style type="text/css">
  .banner {
  background-image: url(logo/banner-bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  padding: 300px 0px;
  background-position: center center;
}
.skiyen_img{
  width: 700px;
  height: 500px;
}
</style>