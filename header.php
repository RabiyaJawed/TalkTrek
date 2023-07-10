<?php
  session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 
 <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

 <title>TalkTrek</title>
 </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
  <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

<div class="container-fluid">
  <div class="d-flex align-items-center">
    <div class="site-logo mr-auto w-25"><a href="loggedin.php">TalkTrek</a></div>

    <div class="mx-auto text-center">
      <nav class="site-navigation position-relative text-right" role="navigation">
        <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
        <li><a href="#lang-section" class="nav-link">Languages</a></li>
          <li><a href="#vocab-section" class="nav-link">Vocabulary</a></li>
          <li><a href="#Ex-section" class="nav-link">Exercises</a></li>
          <?php
        if (isset($_SESSION['userId'])){
          echo'
          <li><a href="loggedin/profile.php" name="profile">Profile</a></li>
          <li><a href="includes/logout.inc.php" name="logout-submit">Logout</a></li>';
        }
         ?>

        </ul>
      </nav>
    </div>

    <div class="ml-auto w-25">
      <nav class="site-navigation position-relative text-right" role="navigation">
        <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
          <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
        </ul>
      </nav>
      <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
    </div>
  </div>
</div>

</header>
  
