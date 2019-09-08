<?php include '../database.php'; ?> 

<?php include 'query.php'; ?>
<?php
			 
						    $query= " SELECT DISTINCT hospitalstock.blood_component as blood_component, hospitalstock.hospital_name as hospital_name, SUM(hospitalstock.amount) as amount
       
       from users, hospital_info, hospitalstock  
							
                                                   		WHERE hospitalstock.hospital_name='".$row['hospital_name']."' AND
													
													hospitalstock.hospital_name=hospital_info.hospital_name
													
													GROUP BY hospitalstock.blood_component ";
						
					$result = mysqli_query($connection, $query);
				   $rowdd=mysqli_fetch_array($result);
						  
						  
						  //echo $row['hospital_name'];
						  //echo $rowdd['hospital_name'];
?>