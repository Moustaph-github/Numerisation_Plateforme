<?php
  include("../Model/db.php");
  session_start();

  if(isset($_POST['connexion'])) {

    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['motdepasse'];

    if(!empty($username) AND !empty($password)) {

      $requete = $bdd->prepare("SELECT * FROM users WHERE username=? AND motdepasse=?");
      $requete->execute(array($username, $password));
      $user = $requete->rowCount();

      if($user == 1) {

        $userinfo = $requete->fetch(PDO::FETCH_OBJ);
        $_SESSION['username'] = $userinfo->username;
        $_SESSION['motdepasse'] = $userinfo->password;
        $_SESSION['id'] = $userinfo->id;
        header("Location:../CoolAdmin-master/form.php?id=".$_SESSION['id']);
      }
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Revetive - Free Business Corporate Template By MACode ID</title>

  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          <img src="../assets/img/Senegal Flag.png" width="10%" height="10%" alt="">
          <img src="../assets/img/Marex.jpeg" width="10%" height="10%" alt="">
          MMG/DCSOM/<span class="text-primary">Guide d'inspection des mines et des carrières</span> 
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Accueil</a>
            </li>
            <!-- <li class="nav-item">
              <a href="about.php" class="nav-link">A propos</a>
            </li>-->
            <li class="nav-item">
              <!-- <a href="services.html" class="nav-link">Services</a> -->
            </li>
            <li class="nav-item">
              <!-- <a href="portfolio.html" class="nav-link">Projects</a> -->
            </li>
            <li class="nav-item">
              <!-- <a href="blog.html" class="nav-link">News</a> -->
            </li>
            <!--<li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>-->
            <li class="nav-item active">
              <a href="login.php" class="nav-link">Se Connectez</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/Site\ minier.jpeg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Se Connecter</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Connexion</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <h2 class="title-section mb-3"><hr></hr> Connectez-vous <hr></hr></h2>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-6">
            <form method="post" class="form-contact">
              <div class="row">
                
                <div class="col-12 py-2">
                  <label for="subject" class="fg-grey">Nom d'utilisateur</label>
                  <input type="text" name="username" class="form-control" placeholder="username">
                </div>
                <div class="col-12 py-2">
                    <label for="subject" class="fg-grey">Mot de passe</label>
                    <input type="password" name="motdepasse" class="form-control" placeholder="password">
                </div>
                
                <div class="col-12 mt-2">
                  <button name="connexion" type="submit" class="btn btn-primary px-5">Se Connectez</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

  </main>


  <footer class="page-footer">
    <div class="container">
      <!--<div class="row">
        <div class="col-lg-3 py-3">
          <h3>Audit<span class="fg-primary">Minier</span></h3>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Information</h5>
          <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          <p>Email: example@mail.com</p>
          <p>Phone: +00 112323980</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">Career</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">News & Feed</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
          </form>
        </div>
      </div>-->

      <!--<hr>-->

      <div class="row mt-4">
        <div class="col-md-6">
          <p>Copyright 2023. Tous droits réservés <a href="index.php">MAREX Sous la direction de Dr Abdou Aziz NDIAYE</a></p>
        </div>
        <!--<div class="col-md-6 text-right">
          <div class="sosmed-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>-->
      </div>
    </div>
  </footer>

  
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>