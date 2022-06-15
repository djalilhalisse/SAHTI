<?php
 session_start();

if(isset($_POST['btn_login']))
{
require('../configuration/configuration.php');

$email=$_POST['email'];
$motdepasse=$_POST['motdepasse'];

echo $sql="SELECT * FROM liste_medecins WHERE email_medecin='$email' AND pass_medecin='$motdepasse'";
	
$data=mysqli_query($conn,$sql);  
   	
   if(mysqli_num_rows($data)>0)
	{	

         session_start();
		 
		$row=mysqli_fetch_array($data);

		$_SESSION['id_medecin']=$row['id_medecin'];
		$_SESSION['nom_medecin']=$row['nom'];
		
		header('Location:index.php');

	}
	else
	{
	header('Location:doctorLogin.php?error=invalidUSER');
	}
}
?>   