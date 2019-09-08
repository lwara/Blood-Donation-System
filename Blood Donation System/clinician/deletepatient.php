<?php 
include '../database.php';
$query="DELETE from patient_info where patient_id=".$_REQUEST['pid'];
$result=mysqli_query($connection,$query);

header("location:  editpatient.php");
 ?>