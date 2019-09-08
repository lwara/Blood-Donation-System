<?php 
include 'database.php';
//include 'editHospitalnfo.php';



$name=$_POST['hospitalname'];
$distr=$_POST['hospital_district'];
$type=$_POST['hospital_type'];
$branch=$_POST['branch'];
$pid=$_POST['hospitalID'];



$sql="UPDATE hospital_info 
               SET hospital_name='$name',
				hospital_district='$distr',
				hospital_type='$type'				
				
			WHERE hospital_id='$pid'";
				
				

if(mysqli_query($connection, $sql))
{
		header ("location: editHospitalnfo.php");
} 

mysqli_close($connection);

?>