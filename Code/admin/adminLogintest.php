<?php
if(isset($_POST['btn_login']))
{
require('../configuration/configuration.php');

$email=$_POST['email'];
$motdepasse=$_POST['motdepasse'];

echo$sql="SELECT * FROM liste_patients WHERE email_utilisateur='$email' AND motdepasse_utilisateur='$motdepasse' AND user_type=2";
	
$data=mysqli_query($conn,$sql);  
	
   if(mysqli_num_rows($data)>0)
	{	

         session_start();
		 
		$row=mysqli_fetch_array($data);
		 
		$_SESSION['id_utilisateur']=$row['id_utilisateur'];
		$_SESSION['user_type']=2;

		header('Location:index.php');
	}
	else
	{
	header('Location:adminLogin.php?error=invalidUSER');
	}
}
?>   