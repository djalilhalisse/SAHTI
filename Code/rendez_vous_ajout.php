<?php
if (isset($_POST['prendre'])) {
	$nom=$_POST['nom'];
	$telephone=$_POST['telephone'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$tempsrdv=$_POST['temps_rdv'];
	$message=$_POST['message'];
    $cid=$_POST['cid'];
		require './configuration/configuration.php';

		$appins="INSERT INTO rendez_vous(nom_rdv,email_rdv,telephone_rdv,medecin,date_rdv,temps_rdv,message_rdv) VALUES 
	('$nom','$email','$telephone','$cid','$date','$tempsrdv','$message') ";

	$result=mysqli_query($conn,$appins);
	  
	$ticketno = mysqli_insert_id($conn);

	if($ticketno){

			echo '<script>alert("Votre rendez-vous est pris \n  Numéro de billet : '.$ticketno.' ");
		window.location="./rendez_vous.php"</script>';
		
	 }else{
	 	echo '<script>alert("Votre inscription au rendez-vous a échoué Veuillez réessayer.");
				window.location="./rendez_vous.php"</script>';
	 }

}else{
	echo '<script>
				window.location="./index_login.php?error_invalid"</script>';
}
?>