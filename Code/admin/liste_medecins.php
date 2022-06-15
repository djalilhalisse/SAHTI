<?php
require('../configuration/configuration.php');
$select_userRequest="SELECT * FROM liste_medecins ";
$data_sur=mysqli_query($conn,$select_userRequest);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Liste Médecins</title>

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
      <h1 class="text-center wow fadeInUp">Liste Médecins</h1>
      <br><br>

      <table id="customers" class="wow fadeInUp">
  <tr>
    <th>No</th>
    <th>Nom Médecin</th>
    <th>Image</th>
    <th>Spécialité</th>
    <th>Téléphone</th>
    <th>Prix</th>
    <th>Adresse</th>
    <th>Actions</th>
  </tr>
  <?php
	$select = mysqli_query($conn,"SELECT * FROM liste_medecins");
	$noofrows=mysqli_num_rows($select);
	$count=0;
	if($noofrows>0)
	{
	while($row= mysqli_fetch_array($select))
	{
	$count++;														
	?>
	<?php $id = $row[0]; ?>
    <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo$row['nom']; ?></td>
        <td><image src="../img_doc/<?php echo $row['image'];?>" width="100px"></td>
        <td><?php echo$row['specialite']; ?></td>
        <td><?php echo$row['telephone']; ?></td>
        <td><?php echo$row['prix']; ?></td>
        <td><?php echo$row['adresse']; ?></td>
		<td>
			<a onclick="return confirm('Voulez-vous vraiment supprimer ce Médecin?');" href="actions/doctors_Delete.php?pcid=<?php echo $row['id_medecin'];?>&action=delete" title="Delete" class="btn btn-danger">
			<i class="fa fa-remove" >Supprimer</i></a>
		</td>                             
    </tr>
<?php
}
}							  
?>  
</table>
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