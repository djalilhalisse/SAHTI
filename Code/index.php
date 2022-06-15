<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>SAHTI</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php include('./header/header.php'); ?>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">nous tient à coeur</span>
        <h1 class="display-4">Votre santé</h1>
        <a href="loginpage.php" class="btn btn-primary">Prendre rendez-vous</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Partager</span> Mes Documents</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Adopter</span> Les Bons Gestes</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Prendre</span> Rendez-Vous</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>BIENVENUE</h1>
            <p class="text-grey mb-4">Accédez rapidement aux disponibilités de tous vos professionnels de santé. <br> Prenez des décisions éclairées et adaptées à vos besoins de santé. <br> Gérez vos rendez-vous et documents de santé ainsi que ceux de vos proches sur une même application.</p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Nos Médecins</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="./img_doc/01.png" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0"><b>Dr. BENSALAH MED</b></p>
              <span class="text-primary">Interniste</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="./img_doc/02.png" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0"><b>Dr. RAHMOUNE</b></p>
              <span class="text-primary">Interniste</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="./img_doc/03.png" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0"><b>Dr. CHORFI</b></p>
              <span class="text-primary">Psychologue</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="./img_doc/04.png" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0"><b>Dr. BOUKHEZZA AMINA</b></p>
              <span class="text-primary">Gynecologist</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('./footer/footer.php'); ?>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>