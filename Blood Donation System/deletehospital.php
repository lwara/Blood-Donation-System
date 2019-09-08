<?php 
include 'database.php';
$query="DELETE from hospital_info where hospital_id=".$_REQUEST['pid'];
$result=mysqli_query($connection,$query);

header("location:  editHospitalnfo.php");
 ?>