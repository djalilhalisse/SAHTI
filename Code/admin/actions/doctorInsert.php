<?php

if (isset($_POST['ajouter'])) {

	        $nom=$_POST['nom'];
			$specialite=$_POST['specialite'];
			$email=$_POST['email'];
			$passw=$_POST['motdepasse'];
			$adresse=$_POST['adresse'];
            $telephone=$_POST['telephone'];
            $temps=$_POST['temps'];
            $prix=$_POST['prix'];
            $id=$_POST['id'];

            require('../configuration/configuration.php');
			
	 $sql="INSERT INTO liste_medecins(id_medecin,nom,specialite,email_medecin,pass_medecin,adresse,telephone,temps_travail,prix) 
	VALUES ('$id','$nom','$specialite','$email','$passw','$adresse','$telephone','$temps','$prix')";				
	$result=mysqli_query($conn,$sql);
	//die();
	
		echo '<script type="text/javascript">                
                window.location = "../index.php"; 
			  </script>';
}

?>