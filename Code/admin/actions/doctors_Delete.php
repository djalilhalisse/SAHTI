<?php
if(isset($_REQUEST['pcid']))
{
	 $id=$_REQUEST['pcid'];
     require('../configuration/configuration.php');
	 echo $sqli="DELETE FROM liste_medecins WHERE id_medecin=$id";
	 mysqli_query($conn,$sqli);
	 
	  header('Location:../liste_medecins.php?Delete_Success');
}
?>