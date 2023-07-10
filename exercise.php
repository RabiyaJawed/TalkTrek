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
        .exercise {
      margin-bottom: 20px;
    }
    .exercise-title {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .exercise-question {
      margin-bottom: 10px;
    }
    .exercise-options {
      margin-bottom: 10px;
    }
    .exercise-answer {
      font-style: italic;
      color: #666;
      display: none;
    }
    .reveal-button {
      margin-top: 10px;
      background-color: #eee;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
    }
    .language-title {
      font-weight: bold;
      margin-bottom: 10px;
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
            <h2 class="section-title">Exercises</h2>
          </div>
        
        </div>
        <h2 class="language-title">English</h2>

          <div class="row mb-5 align-items-center">
          
   
    
        
    <!-- Exercise 1 -->
    <div class="exercise">
      <div class="exercise-title">Exercise 1</div>
      <div class="exercise-question">
        Fill in the blanks with the correct form of the verb "to be":
      </div>
      <div class="exercise-options">
        <input type="text"  /> am a student.
      </div>
      <div class="exercise-options">
        <input type="text"  /> is a doctor.
      </div>
      <div class="exercise-options">
        <input type="text" /> are engineers.
      </div>
      <div class="exercise-answer">
        Answer: I am a student. / She is a doctor. / They are engineers.
      </div>
      <button class="reveal-button" onclick="revealAnswer(this)">Reveal Answer</button>
    </div>
    
    <!-- Exercise 2 -->
    <div class="exercise">
      <div class="exercise-title">Exercise 2</div>
      <div class="exercise-question">
        Choose the correct word to complete the sentence:
      </div>
      <div class="exercise-options">
        The weather is ______ today.
        <br />
        <input type="radio" name="exercise2" value="sunny" /> sunny
        <input type="radio" name="exercise2" value="snowy" /> snowy
        <input type="radio" name="exercise2" value="rainy" /> rainy
      </div>
      <div class="exercise-answer">
        Answer: The weather is <strong>sunny</strong> today.
      </div>
      <button class="reveal-button" onclick="revealAnswer(this)">Reveal Answer</button>
    </div>
    
    <!-- Add more exercises here -->
    
    <script>
      function revealAnswer(button) {
        var answer = button.previousElementSibling;
        answer.style.display = "block";
        button.style.display = "none";
      }
    </script>
  
          </div></div>
          <br><br>
		  <div class="site-section" id="S-section">
      <div class="container">
        <h2 class="language-title">Spanish</h2>
        <div class="row mb-5 align-items-center">
              <!-- Exercise 1 -->
    <div class="exercise">
      <div class="exercise-title">Exercise 1</div>
      <div class="exercise-question">
        Fill in the blanks with the correct conjugation of the verb "ser" (to be):
      </div>
      <div class="exercise-options">
        <input type="text"  /> soy estudiante.
      </div>
      <div class="exercise-options">
        <input type="text"  /> es médico.
      </div>
      <div class="exercise-options">
        <input type="text"  /> somos ingenieros.
      </div>
      <div class="exercise-answer">
        Answer: Yo soy estudiante. / Él es médico. / Nosotros somos ingenieros.
      </div>
      <button class="reveal-button" onclick="revealAnswer(this)">Reveal Answer</button>
    </div>
    
    <!-- Exercise 2 -->
    <div class="exercise">
      <div class="exercise-title">Exercise 2</div>
      <div class="exercise-question">
        Choose the correct word to complete the sentence:
      </div>
      <div class="exercise-options">
        El libro es ______.
        <br />
        <input type="radio" name="exercise2" value="rojo" /> rojo
        <input type="radio" name="exercise2" value="azul" /> azul
        <input type="radio" name="exercise2" value="verde" /> verde
      </div>
      <div class="exercise-answer">
        Answer: El libro es <strong>rojo</strong>.
      </div>
      <button class="reveal-button" onclick="revealAnswer(this)">Reveal Answer</button>
    </div>
    
    <!-- Add more exercises here -->
    
    <script>
      function revealAnswer(button) {
        var answer = button.previousElementSibling;
        answer.style.display = "block";
        button.style.display = "none";
      }
    </script>
        </div></div></div><br><br>
		<div class="site-section" id="F-section">
      <div class="container">
        <h2 class="language-title">French</h2>
        <div class="row mb-5 align-items-center">
                <!-- Exercise 1 -->
    <div class="exercise">
      <div class="exercise-title">Exercise 1</div>
      <div class="exercise-question">
        Fill in the blanks with the correct conjugation of the verb "être" (to be):
      </div>
      <div class="exercise-options">
        <input type="text"  /> suis étudiant.
      </div>
      <div class="exercise-options">
        <input type="text"  /> est médecin.
      </div>
      <div class="exercise-options">
        <input type="text"  /> sommes ingénieurs.
      </div>
      <div class="exercise-answer">
        Answer: Je suis étudiant. / Elle est médecin. / Nous sommes ingénieurs.
      </div>
      <button class="reveal-button" onclick="revealAnswer(this)">Reveal Answer</button>
    </div>
    
    <!-- Exercise 2 -->
    <div class="exercise">
      <div class="exercise-title">Exercise 2</div>
      <div class="exercise-question">
        Choose the correct word to complete the sentence:
      </div>
      <div class="exercise-options">
        Le livre est ______.
        <br />
        <input type="radio" name="exercise2" value="rouge" /> rouge
        <input type="radio" name="exercise2" value="bleu" /> bleu
        <input type="radio" name="exercise2" value="vert" /> vert
      </div>
      <div class="exercise-answer">
        Answer: Le livre est <strong>rouge</strong>.
      </div>
      <button class="reveal-button" onclick="revealAnswer(this)">Reveal Answer</button>
    </div>
    
    <!-- Add more exercises here -->
    
    <script>
      function revealAnswer(button) {
        var answer = button.previousElementSibling;
        answer.style.display = "block";
        button.style.display = "none";
      }
    </script>
          
        </div></div><br><br>
        <div class="site-section" id="A-section">
      <div class="container">
        <h2 class="language-title">Arabic</h2>
        <div class="row mb-5 align-items-center">
              <!-- Exercise 1 -->
    <div class="exercise">
      <div class="exercise-title">Exercise 1</div>
      <div class="exercise-question">
        Fill in the blanks with the appropriate Arabic pronouns:
      </div>
      <div class="exercise-options">
        <input type="text" /> طالب.
      </div>
      <div class="exercise-options">
        <input type="text"  /> طبيب.
      </div>
      <div class="exercise-options">
        <input type="text"  /> مهندسون.
      </div>
      <div class="exercise-answer">
        Answer: أنا طالب. / هو طبيب. / نحن مهندسون.
      </div>
      <button class="reveal-button" onclick="revealAnswer(this)">Reveal Answer</button>
    </div>
    
    <!-- Exercise 2 -->
    <div class="exercise">
      <div class="exercise-title">Exercise 2</div>
      <div class="exercise-question">
        Choose the correct word to complete the sentence:
      </div>
      <div class="exercise-options">
        الكتاب ______.
        <br />
        <input type="radio" name="exercise2" value="أحمر" /> أحمر
        <input type="radio" name="exercise2" value="أزرق" /> أزرق
        <input type="radio" name="exercise2" value="أخضر" /> أخضر
      </div>
      <div class="exercise-answer">
        Answer: الكتاب <strong>أحمر</strong>.
      </div>
      <button class="reveal-button" onclick="revealAnswer(this)">Reveal Answer</button>
    </div>
    
    <!-- Add more exercises here -->
    
    <script>
      function revealAnswer(button) {
        var answer = button.previousElementSibling;
        answer.style.display = "block";
        button.style.display = "none";
      }
    </script>
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