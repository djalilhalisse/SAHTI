<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Ajouter Médecin</title>

  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php include('./header/header_login.php'); ?>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(./assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajouter Médecin</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Ajouter Médecin</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Ajouter Médecin</h1>

      <form class="main-form" method="post" action="./actions/doctorInsert.php">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="nom" placeholder="Nom Médecin">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="specialite" placeholder="Spécialité..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="email" class="form-control" name="email" placeholder="Email Médecin">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="password" class="form-control" name="motdepasse" placeholder="Mot de passe..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="adresse" placeholder="Adresse">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="number" class="form-control" name="telephone" placeholder="Téléphone..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="temps" placeholder="Temps Travail">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="file" class="form-control"  name="image" placeholder="">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="number" class="form-control" name="prix" placeholder="Prix Consultation..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="number" class="form-control" name="id" placeholder="Id Médecin..">
          </div>
        </div>
        <div>
		  <button type="submit" name="ajouter" class="btn btn-primary mt-3 wow zoomIn">Ajouter Médecin</button>
          <button type="reset" class="btn btn-outline-danger mt-3 wow zoomIn">Reset</button>
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