<?php 
include '../database.php';
//include 'editHospitalnfo.php';

$sql="UPDATE blood_request_transac
			SET request_status='Pending'
							
				
			WHERE transac_id=".$_REQUEST['pid'];
				
				

if(mysqli_query($connection, $sql))
{
		header ("location: processRequest.php");
} 

mysqli_close($connection);

?>