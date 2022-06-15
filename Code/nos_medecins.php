<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Recherche Médecin</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php 
        include('./header/header_login.php');
        require('./configuration/configuration.php');?>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index_login.php">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nos Médecins</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Nos Médecins</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

<section  class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_25">	
<div  class="col-md-12" style="float:center;" >
  <form action="./nos_medecins.php" method="get" class="form-inline">
    <div class="input-group input-navbar">
      <div class="input-group-prepend">
        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
      </div>
      <input type="text" name="nom_med" class="form-control" placeholder="Entrer Nom Médecin.." aria-label="Username" aria-describedby="icon-addon1">
    </div>
    <div class="col-md-3 offset-md-1">
      <select name="specialite" class="custom-select">
        <option>Spétialité</option>
        <?php
        require ('./configuration/configuration.php');
        $select = mysqli_query($conn, "SELECT distinct (specialite) FROM liste_medecins");
        $noofrows = mysqli_num_rows($select);
        $count1 = 0;
        if ($noofrows > 0)
        {
          while ($row = mysqli_fetch_array($select))
          {
            $count1++;

            ?>
		        <option value="<?php echo $row['specialite']; ?>"><?php echo $row['specialite']; ?></option>
						<?php
}
}
?>

      </select>
    </div>
          <div class="col-md-2 offset-md-1" >
            <input class="btn btn-primary" type="submit" value="Rechercher">
          </div>
  </form>
</div>		
</section>

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
          <?php
require ('.\configuration\configuration.php');

if (isset($_GET['specialite']) && isset($_GET['nom_med']))
{
    $nom = $_GET['nom_med'];
    $specialite = $_GET['specialite'];

    $sql = "SELECT * FROM liste_medecins where specialite='$specialite' AND nom LIKE '%$nom%'";

    $select = mysqli_query($conn, $sql);

    //  var_dump($select);
    $noofrows = mysqli_num_rows($select);
    $count3 = 0;

    if ($noofrows > 0)
    {
        while ($row = mysqli_fetch_array($select))
        {
            $count3++;
?>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="img_doc/<?php echo $row['image'];?>" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0"><b><?php echo $row['nom'];?></b></p>
                  <span class="text-primary"><?php echo $row['specialite'];?></span>
                  <p><b>Prix consultation:&nbsp</b><?php echo $row['prix'];?>&nbspDA</p>
                  <p><b>Téléphone:&nbsp</b><?php echo $row['telephone'];?></p>
                  <p><b>Adresse:&nbsp</b><?php echo $row['adresse'];?></p>
                  <p><b>Temps Travail:&nbsp</b><?php echo $row['temps_travail'];?></p>
                  <a href="rendez_vous.php?nom_med=<?php echo $row['nom'] ?>" class="btn btn-primary btn-lg active">Prendre rendez-vous</a>
                </div>
              </div>
            </div>

            <?php
}
}
}

elseif (isset($_GET['specialite']))
{
    $specialite = $_GET['specialite'];
    $sql = "SELECT * FROM liste_medecins where specialite='$specialite' AND nom LIKE '%$nom%'";
    $select = mysqli_query($conn, $sql);
    $noofrows = mysqli_num_rows($select);
    $count = 0;
    if ($noofrows > 0)
    {
        while ($row = mysqli_fetch_array($select))
        {
            $count++;

?>

    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="img_doc/<?php echo $row['image'];?>" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0"><b><?php echo $row['nom'];?></b></p>
                  <span class="text-primary"><?php echo $row['specialite'];?></span>
                  <p><b>Prix consultation:&nbsp</b><?php echo $row['prix'];?>&nbspDA</p>
                  <p><b>Téléphone:&nbsp</b><?php echo $row['telephone'];?></p>
                  <p><b>Adresse:&nbsp</b><?php echo $row['adresse'];?></p>
                  <p><b>Temps Travail:&nbsp</b><?php echo $row['temps_travail'];?></p>
                  <a href="rendez_vous.php?cid=<?php echo $row['nom'] ?>" class="btn btn-primary btn-lg active">Prendre rendez-vous</a>
                </div>
              </div>
            </div>

            <?php
}
}
}
?>
							<?php
if (isset($_GET['nom_med']) && $_GET['nom_med'] != NULL)
{
    $nom = $_GET['nom_med'];
    $select = mysqli_query($conn, "SELECT * FROM liste_medecins where nom LIKE '%$nom%'");
    $noofrows = mysqli_num_rows($select);
    $count = 0;
    if ($noofrows > 0)
    {
        while ($row = mysqli_fetch_array($select))
        {
            $count++;

?>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="img_doc/<?php echo $row['image'];?>" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0"><b><?php echo $row['nom'];?></b></p>
                  <span class="text-primary"><?php echo $row['specialite'];?></span>
                  <p><b>Prix consultation:&nbsp</b><?php echo $row['prix'];?>&nbspDA</p>
                  <p><b>Téléphone:&nbsp</b><?php echo $row['telephone'];?></p>
                  <p><b>Adresse:&nbsp</b><?php echo $row['adresse'];?></p>
                  <p><b>Temps Travail:&nbsp</b><?php echo $row['temps_travail'];?></p>
                  <a href="rendez_vous.php?cid=<?php echo $row['nom'] ?>" class="btn btn-primary btn-lg active">Prendre rendez-vous</a>
                </div>
              </div>
            </div>

            
            <?php
}
}
}

if (!(isset($_GET['nom_med'])) && !(isset($_GET['specialite'])))
{
    $select = mysqli_query($conn, "SELECT * FROM liste_medecins");
    $noofrows = mysqli_num_rows($select);
    $count = 0;
    if ($noofrows > 0)
    {
        while ($row = mysqli_fetch_array($select))
        {
            $count++;

?>

    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="img_doc/<?php echo $row['image'];?>" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0"><b><?php echo $row['nom'];?></b></p>
                  <span class="text-primary"><?php echo $row['specialite'];?></span>
                  <p><b>Prix consultation:&nbsp</b><?php echo $row['prix'];?>&nbspDA</p>
                  <p><b>Téléphone:&nbsp</b><?php echo $row['telephone'];?></p>
                  <p><b>Adresse:&nbsp</b><?php echo $row['adresse'];?></p>
                  <p><b>Temps Travail:&nbsp</b><?php echo $row['temps_travail'];?></p>
                  <a href="rendez_vous.php?cid=<?php echo $row['nom'] ?>" class="btn btn-primary btn-lg active">Prendre rendez-vous</a>
                </div>
              </div>
            </div>

            <?php
}
}
}

?>

          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <?php include('./footer/footer.php'); ?>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>