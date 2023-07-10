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
 <style>
        h1 {
      text-align: center;
    }
    h2 {
      margin-bottom: 10px;
    }
    .vocabulary-list {
      margin-bottom: 20px;
    }
    .language-title {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .word {
      display: block;
      margin-right: 10px;
      margin-bottom: 5px;
    }
 </style>
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
        <li><a href="#E-section" class="nav-link">English</a></li>
          <li><a href="#S-section" class="nav-link">Spanish</a></li>
          <li><a href="#F-section" class="nav-link">French</a></li>
          <li><a href="#A-section" class="nav-link">Arabic</a></li>
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

    
  </div>
</div>

</header>
  

<div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">


			</div></div></div></div></div>

	<div class="site-section" id="E-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Vocabulary</h2>
          </div>
        
        </div>
       

          <div class="row mb-5 align-items-center">
          <div class="vocabulary-list">
      <h2 class="language-title">English</h2>
      <div class="word">Hello - Bonjour</div>
      <div class="word">Thank you - Merci</div>
      <div class="word">Dog - Chien</div>
      <div class="word">Flower - Fleur</div>
      <div class="word">To eat - Manger</div>
    </div>
  
          </div></div>
          <br><br>
		  <div class="site-section" id="S-section">
      <div class="container">
        
        <div class="row mb-5 align-items-center">
        <div class="vocabulary-list">
      <h2 class="language-title">Spanish</h2>
      <div class="word">Hola - Hello</div>
      <div class="word">Gracias - Thank you</div>
      <div class="word">Perro - Dog</div>
      <div class="word">Flor - Flower</div>
      <div class="word">Comer - To eat</div>
    </div>
        </div></div></div><br><br>
		<div class="site-section" id="F-section">
      <div class="container">
        
        <div class="row mb-5 align-items-center">
        <div class="vocabulary-list">
      <h2 class="language-title">French</h2>
      <div class="word">Bonjour - Hello</div>
      <div class="word">Merci - Thank you</div>
      <div class="word">Chien - Dog</div>
      <div class="word">Fleur - Flower</div>
      <div class="word">Manger - To eat</div>
    </div>
          
        </div></div><br><br>
        <div class="site-section" id="A-section">
      <div class="container">
        
        <div class="row mb-5 align-items-center">
        <div class="vocabulary-list">
      <h2 class="language-title">Arabic</h2>
      <div class="word">Marhaba - Hello</div>
      <div class="word">Shukran - Thank you</div>
      <div class="word">Kalb - Dog</div>
      <div class="word">Zahra - Flower</div>
      <div class="word">Akala - To eat</div>
    </div>
        </div></div>
    </div>
		</div></div>

        

      </div>
    </div></div>
	

			 
			


<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>

  </body>
</html>