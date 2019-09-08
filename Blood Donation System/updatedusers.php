<?php 
include 'database.php';
//include 'editHospitalnfo.php';



$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$phone=$_POST['phonenumber'];
$role=$_POST['role'];
$password=$_POST['password'];
$hospital=$_POST['hospital'];
$branch=$_POST['branch'];
$username=$_POST['username'];
$pid=$_POST['userid'];



$sql="UPDATE users
               SET fname='$fname',
				   lname='$lname',
				   phone_number='$phone',
				   role='$role',
				   password='$password',
				   hospital_id='$hospital',
				   mbts_id='$branch',
				   username='$username'
				   
			WHERE hospital_id='$pid'";
				
				

if(mysqli_query($connection, $sql))
{
		header ("location: editUsers.php");
} 

mysqli_close($connection);

?>