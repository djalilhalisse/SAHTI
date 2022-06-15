<?php
  session_start();
if(isset($_SESSION['id_medecin']))
{ 

  $doctor_id=$_SESSION['nom_medecin'];
  
  $id=17;
  require('../configuration/configuration.php');
    $sql="SELECT * FROM rendez_vous WHERE medecin='$doctor_id' ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Liste rendez-vous</title>

  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/css/theme.css">
  <style>
#customers {
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
    text-align: center;
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php include('./header/header_login.php'); ?>

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Mes Rendez-vous</h1>
      <br><br>

      <table id="customers" class="wow fadeInUp">
  <tr>
    <th>Numéro Ticket</th>
    <th>Nom</th>
    <th>Email</th>
    <th>Téléphone</th>
    <th>Date</th>
    <th>Temps</th>
    <th>État</th>
    <th>Message</th>
    <th>Date prise</th>
    <th>Actions</th>
  </tr>
  <?php
    $result=mysqli_query($conn,$sql);
    if($result){
    if(mysqli_num_rows($result)>0){
    while($user=mysqli_fetch_array($result))
    {  
    $c_id= $user['id_rdv'];
  ?>
  <tr>
    <td><?=$user['id_rdv']?></td>
    <td><?=$user['nom_rdv']?></td>
    <td><?=$user['email_rdv']?></td>
    <td><?=$user['telephone_rdv']?></td>
    <td><?=$user['date_rdv']?></td>
    <td><?=$user['temps_rdv']?></td>
    <td><?=$user['etat']?></td>
    <td><?=$user['message_rdv']?></td>
    <td><?=$user['timestamp']?></td>
    <td>
    <a href="./actions/suppression.php?id=<?=$user['id_rdv']?>">
    <button name="del" title="Delete" class="btn btn-danger btn-sm"   >
    <i class="fa fa-remove">Supprimer</i> </button></a>

    <a href="./actions/annuler.php?value=1&id=<?=$user['id_rdv']?>">
    <button name="cancel" title="cancel" class="btn btn-warning btn-sm"    >
    <i class="fas fa-window-close">Annuler</i></button></a>
    </td>
  </tr>
<?php 
}
}
}
?> 
  
</table>
    </div>
    <br>
    <div class="container text-center wow fadeInUp">
    <h5 class="font-weight-normal">
       État= 0 <span class="text-primary">"Réservé"</span>
       <br>
       État= 1 <span class="text-danger">"Annulé"</span>
    </h5>
    </div> 
  </div>
  
  <?php include('./footer/footer.php'); ?>

<script src="./assets/js/jquery-3.5.1.min.js"></script>

<script src="./assets/js/bootstrap.bundle.min.js"></script>

<script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="./assets/vendor/wow/wow.min.js"></script>

<script src="./assets/js/theme.js"></script>

</body>
</html>

<?php

}
else{
  echo '<script type="text/javascript">
           window.location="../index.php?invalidUSER";
          </script>'; 
}

?>
