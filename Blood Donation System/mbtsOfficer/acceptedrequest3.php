<?php 
include '../database.php';
//include 'editHospitalnfo.php';
//$name=$_POST['blood'];

//$name1=$_POST['mbtsamount'];

$tiwo=$_REQUEST['pid'];
$another="SELECT blood_request_transac.blood_amount

FROM blood_request_transac
where transac_id=".$tiwo;
$result = mysqli_query($connection, $another);
		$rowdd=mysqli_fetch_array($result);

if($rowdd['blood_amount'] <1000){
$sql="UPDATE blood_request_transac
			SET request_status='Accepted'
				
			WHERE transac_id=".$_REQUEST['pid'];
				
				

if(mysqli_query($connection, $sql))
{
		header ("location: processRequest.php");
} 
}
else {
echo "<script type='text/javascript'>alert('YOU DO NOT HAVE ENOUGH BLOOD');</script>";
//header ("location: processRequest.php");
}
mysqli_close($connection);

?>