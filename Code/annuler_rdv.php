<?php
if (isset($_POST['annuler'])) {

	$email=$_POST['email'];
	$tid=$_POST['id'];
 
require '.\configuration\configuration.php';


$select="SELECT id_rdv FROM rendez_vous where id_rdv=$tid";

$r=mysqli_query($conn,$select);

if ($r>0) {
		$cancel="UPDATE rendez_vous SET etat=1 WHERE id_rdv=$tid ";
		$r2=mysqli_query($conn,$cancel);
		if ($r2>0) {
			echo '<script>alert("Votre rendez-vous est Annulé");
		window.location="./nos_medecins.php"</script>';
		}
	 }
}
?>
