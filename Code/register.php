<?php

require('./configuration/configuration.php');
            
	        if(isset($_POST['reg_btn']))
			{
				$nom=$_POST['nom'];
				$email=$_POST['email'];
				$motdepasse=$_POST['motdepasse'];
                $telephone=$_POST['telephone'];
				
			
			
			
	echo $sql="INSERT INTO liste_patients(nom_utilisateur,email_utilisateur,motdepasse_utilisateur,telephone) 
	VALUES ('$nom','$email','$motdepasse',$telephone)";				
	$result=mysqli_query($conn,$sql);
	
	header('Location:loginpage.php');
			}
?>