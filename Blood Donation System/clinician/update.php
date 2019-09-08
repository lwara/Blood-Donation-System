<?php 
include '../database.php';
//include 'editHospitalnfo.php';




$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$blood=$_POST['blood'];

$pid=$_POST['patientid'];



$sql="UPDATE patient_info
			SET fname='$firstname',
				lname='$lastname',
				sex='$gender',
				date_of_birth='$dob',
				blood_group_id='$blood'				
				
			WHERE patient_id='$pid'";
				
				

if(mysqli_query($connection, $sql))
{
		header ("location: editpatient.php");
} 

mysqli_close($connection);

?>