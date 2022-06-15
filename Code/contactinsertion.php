<?php
require('./configuration/configuration.php');
            if(isset($_POST['env_msg']))
			{
	        $nomcont=$_POST['nom'];
			$emailcont =$_POST['email'];
			$sujetcont =$_POST['sujet'];
			$messagecont  =$_POST['message'];
			
	echo $sql="INSERT INTO table_contact(nom_contact,email_contact,sujet_contact,message_contact) 
	VALUES ('$nomcont','$emailcont','$sujetcont','$messagecont')";				
	$result=mysqli_query($conn,$sql);
	
	header('Location:contact.php');
			}
	else{
		echo"error";
	}


?>