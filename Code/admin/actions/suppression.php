<?php
require('../configuration/configuration.php');

$id= $_GET['id'];

  $sql = "DELETE FROM rendez_vous WHERE id_rdv= '$id'  ";
  
if (mysqli_query($conn, $sql)){
		header('Location:../index.php?Record_Deleted_successfully');
	}
else{
		header('Location:../index.php?Record_do_not_updated');	 
	}
?>