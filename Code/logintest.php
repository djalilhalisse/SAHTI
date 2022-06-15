<?php
if(isset($_POST['btn_login']))
{
require('./configuration/configuration.php');

$email=$_POST['email'];
$motdepasse=$_POST['motdepasse'];

echo$sql="SELECT * FROM liste_patients WHERE email_utilisateur='$email' AND motdepasse_utilisateur='$motdepasse'";
	
$data=mysqli_query($conn,$sql);  
	
   if(mysqli_num_rows($data)>0)
	{	

         session_start();
		 
		$row=mysqli_fetch_array($data);

		 $_SESSION['id_utilisateur']=$row['id_utilisateur'];
		 $_SESSION['nom_utilisateur']=$row['nom_utilisateur'];
		
		 header('Location:index_login.php');
	}
	else
	{
	header('Location:loginpage.php?error=invalidUSER');
	}
}
?>   