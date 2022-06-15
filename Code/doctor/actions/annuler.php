<?php
  require('../configuration/configuration.php');

  $id=$_GET['id'];
  $value=$_GET['value'];

    $sqlupdate="UPDATE `rendez_vous` SET etat= '$value' WHERE id_rdv= '$id' ";
 
if (mysqli_query($conn, $sqlupdate)) {
    echo "Record updated successfully";

		header('Location:../index.php?Record_updated_successfully');

	}

else{
		header('Location:../index.php?Record_do_not_updated');
	 
	}