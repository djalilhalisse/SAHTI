<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Admin Login</title>

  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php include('./header/header.php'); ?>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(./assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <h1 class="font-weight-normal">Admin Login</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Admin Login</h1>

      <form class="main-form" action="adminLogintest.php" method="post" role="form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="email" placeholder="Username.." autofocus>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="password" class="form-control" name="motdepasse" placeholder="Mot de passe..">
          </div>
        </div>
        <div>
		<button type="submit" name="btn_login" class="btn btn-primary mt-3 wow zoomIn">Se connecter</button>
        </div>
      </form>
    </div>
  </div> <!-- .page-section -->

  <?php include('./footer/footer.php'); ?>

<script src="./assets/js/jquery-3.5.1.min.js"></script>

<script src="./assets/js/bootstrap.bundle.min.js"></script>

<script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="./assets/vendor/wow/wow.min.js"></script>

<script src="./assets/js/theme.js"></script>
  
</body>
</html>
