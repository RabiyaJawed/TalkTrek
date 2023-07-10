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
  <title>Language Selection</title>
  <style>
    /* Styles for the page layout */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: white;
    }
    .language-options {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }
    .language-option {
      margin: 0 10px;
      color: white;
    }
    .language-option label {
      display: block;
      margin-bottom: 10px;
      color: white;
    }
    .start-button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
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
            <div class="container">
    <h1>Language Selection</h1>
    
    <div class="language-options">
      <div class="language-option">
        <input type="radio" id="english" name="language" value="english" checked>
        <label for="english">English</label>
      </div>
      <div class="language-option">
        <input type="radio" id="french" name="language" value="french">
        <label for="french">French</label>
      </div>
      <div class="language-option">
        <input type="radio" id="spanish" name="language" value="spanish">
        <label for="spanish">Spanish</label>
      </div>
      <div class="language-option">
        <input type="radio" id="arabic" name="language" value="arabic">
        <label for="arabic">Arabic</label>
      </div>
    </div>
    
    <button class="start-button"  onclick="startChat()">Start Chat</button>
  </div>

			</div></div></div></div></div>

  

  
  
            <script>
  function startChat() {
    var selectedLanguage = document.querySelector('input[name="language"]:checked').value;
    var languagePage = "";

    // Set the language page based on the selected language
    switch (selectedLanguage) {
      case "english":
        languagePage = "english.php";
        break;
      case "french":
        languagePage = "french.php";
        break;
      case "spanish":
        languagePage = "spanish.php";
        break;
      case "arabic":
        languagePage = "arabic.php";
        break;
      default:
        languagePage = "english.php";
        break;
    }

    // Redirect to the selected language page
    window.location.href = languagePage;
  }
</script>
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
