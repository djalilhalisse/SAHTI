<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <?php
($_GET);
	?> 

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Prendre rendez-vous</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php include('./header/header_login.php'); ?>


  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index_login.php">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rendez-vous</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Prendre rendez-vous</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Prendre rendez-vous</h1>

      <form class="main-form" method="post" action="rendez_vous_ajout.php">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="nom" placeholder="Nom et Prénom">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="email" class="form-control" name="email" placeholder="Email..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control" name="date">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="temps_rdv" id="departement" class="custom-select">
                <option>11:00 - 11:15 AM </option>
                <option>11:15 - 11:30 AM </option>
                <option>11:30 - 11:45 AM </option>
                <option>11:45 - 12:00 PM </option>
                <option>12:00 - 12:15 PM </option>
                <option>12:15 - 12:30 PM </option>
                <option>12:30 - 12:45 PM </option>
                <option>12:45 - 01:00 PM </option>
                <option>01:00 - 01:15 PM </option>
                <option>01:15 - 01:30 PM </option>
                <option>01:30 - 01:45 PM </option>
                <option>01:45 - 02:00 PM </option>
                <option>02:00 - 02:15 PM </option>
                <option>02:15 - 02:30 PM </option>
                <option>02:30 - 02:45 PM </option>
                <option>02:45 - 03:00 PM </option>
                <option>03:00 - 03:15 PM </option>
                <option>03:15 - 03:30 PM </option>
                <option>03:30 - 03:45 PM </option>
                <option>03:45 - 04:00 PM </option>
                <option>04:00 - 04:15 PM </option>
                <option>04:15 - 04:30 PM </option>
                <option>04:30 - 04:45 PM </option>
                <option>04:45 - 05:00 PM </option>
                <option>05:00 - 05:15 PM </option>
                <option>05:15 - 05:30 PM </option>
                <option>05:30 - 05:45 PM </option>
                <option>05:45 - 05:00 PM </option>
                <option>06:00 - 06:15 PM </option>
                <option>06:15 - 06:30 PM </option>
                <option>06:30 - 06:45 PM </option>
                <option>06:45 - 07:00 PM </option>
                <option>07:00 - 07:15 PM </option>
                <option>07:15 - 07:30 PM </option>
                <option>07:30 - 07:45 PM </option>
                <option>07:45 - 08:00 PM </option>
                <option>08:00 - 08:15 PM </option>
                <option>08:15 - 08:30 PM </option>
                <option>08:30 - 08:45 PM </option>
                <option>08:45 - 09:00 PM </option>
                <option>09:00 - 09:15 PM </option>
                <option>09:15 - 09:30 PM </option>
                <option>09:30 - 09:45 PM </option>
                <option>09:45 - 10:00 PM </option>
                <option>10:00 - 10:15 PM </option>
                <option>10:15 - 10:30 PM </option>
                <option>10:30 - 10:45 PM </option>
                <option>10:45 - 11:00 PM </option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="number" class="form-control" name="telephone" placeholder="Téléphone..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" name="message" placeholder="Entrer message.."></textarea>
          </div>
        </div>
        <div>
        <input type="hidden" name="cid" value="<?php echo $_GET['cid'] ?>" >
		    <button type="submit" name="prendre" class="btn btn-primary mt-3 wow zoomIn">Prendre rendez-vous</button>
        </div>
      </form>
    </div>
  </div> <!-- .page-section -->

  <?php include('./footer/footer.php'); ?>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>