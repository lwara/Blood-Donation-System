<?php include '../database.php'; ?> 
<?php 
						
						  $query="select * from blood_request_transac,
												blood_component,
												hospital_info,
												mbts_stock
												
												
												where  blood_request_transac.request_status != 'Accepted' AND
															blood_component.blood_component_id=blood_request_transac.blood_id AND
															hospital_info.hospital_id= blood_request_transac.hospital_id 
												ORDER BY DateSent DESC";
						  $result = mysqli_query($connection, $query);
						 
						
						?>	
						
						
						
						