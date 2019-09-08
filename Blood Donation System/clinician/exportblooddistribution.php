<?php  session_start(); 
 
 ?> 
 
<?php include '../database.php'; ?> 
 
 
 
 	<?php 
 
 $var_value=$_REQUEST['varname'];
$Kondwani = $_SESSION["kho"];
 
 ?>
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head> 
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
        <meta name="description" content="" /> 
        <meta name="author" content="" /> 
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->         
        <title>Add Hospital</title>         
        <!-- BOOTSTRAP CORE STYLE  -->         
        <link href="../assets/css/bootstrap.css" rel="stylesheet" /> 
        <!-- FONT AWESOME ICONS  -->         
        <link href="../assets/css/font-awesome.css" rel="stylesheet" /> 
        <!-- CUSTOM STYLE  -->         
        <link href="../assets/css/style.css" rel="stylesheet" /> 
        <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->         
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


	
<!-- TO COME UP WITH PAGINATING AND THE SEARCH BUTTON -->



    </head>     
    <body> 
        <!-- HEADER END-->         
       <div class="navbar-fixed-top">		
        <div class="navbar navbar-inverse set-radius-zero " style="background:url(../images3.jpg);background-repeat: no-repeat; background-size: 1550px 300px;">
                       
        </div>         
        <!-- LOGO HEADER END-->         
        <section class="menu-section"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="navbar-collapse collapse ">
                            <ul class="dropdown-menu" role="menu"> 
                                <li>
                                    <a href="#">Action</a>
                                </li>                                 
                                <li>
                                    <a href="#">Another action</a>
                                </li>                                 
                                <li>
                                    <a href="#">Something else here</a>
                                </li>
                                <li class="divider"></li>                                 
                                <li>
                                    <a href="#">Separated link</a>
                                </li>
                            </ul> 
							
<ul id="menu-top" class="nav navbar-nav navbar-left"> 
                                
								<li style="background-color:#800000" >
								
                                    <h5 style="color:white"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp; <?php echo "welcome : ".$Kondwani; ?> </h5>
                                </li>                                 
                                
								
</ul>							
	
                            <ul id="menu-top" class="nav navbar-nav navbar-right"> 
                                  
                                <li>
                                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown" style="background-color:#4C0000; color:white"><i class="fa fa-hospital-o"></i>&nbsp;&nbsp;&nbsp;MANAGE PATIENTS<i class="fa fa-angle-down"></i></a> 
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem" style="background-color:#800000">
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="addpatient.php?name="$var_value>Add Patients</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="editpatient.php?varname=".$var_value>View Patients</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="editpatient.php?varname=".$var_value>Edit Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown" style="background-color:#800000; color:white"><i class="fa fa-bar-chart"></i>&nbsp; &nbsp; &nbsp;GRAPHS <i class="fa fa-angle-down"></i></a> 
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem" style="background-color:#800000">
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="blooddiseases.php?varname=".$var_value php>Blood Distribution</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="bloodstock.php?varname=".$var_value.php>Blood Stock</a>
                                        </li>
                                       
                                    </ul>
                                </li> 
								
                                    <li style="background-color:#4C0000"><a href="distribution.php?varname=".$var_value>DISTRIBUTE BLOOD</a></li> 
									<li style="background-color:#800000"><a href="bloodrequest.php?varname=".$var_value >REQUEST BLOOD</a></li> 
									<li style="background-color:#4C0000"><a href="accepted.php?varname=".$var_value>VIEW ACCEPTED REQUESTS</a></li>
									<li>
                                    <a class="menu-top-active" href="exportblooddistribution.php?varname=".$var_value>Export</a>
                                </li> 
                                   &nbsp;&nbsp;                                
                                                                
                                <li style="background-color:#800000">
                                    <a href="logout.php">LOG OUT</a>
                                </li>  
                            </ul>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>  
</div>  		
        <!-- MENU SECTION END-->         
        <div class="content-wrapper" style="margin-top:100px;"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <h1 class="page-head-line">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-gears (alias) fa-3x" style="border:solid grey 1px;border-radius:50%;"></i> EXPORT BLOOD DISRIBUTION RECORDS</h1>
                        <div class="btn-toolbar" role="toolbar" style="margin-left:350px"> 
                            <div class="btn-group"> 
                                <button onclick='exportAsExcel();' class="btn btn-primary" style="width:120px;background-color:#E60000; color:white; border-radius:10px">Excel Export </button>                               
                            </div>
                                                      

                        </div>                         
                        <br> 
                    </div>                     
                </div>                 
                <div class="row" style="margin-right:px; margin-left:250px"> 
                    <div class="col-md-12" style="border-radius:8px"> 
                        <div class="panel panel-default"> 
                            <div class="panel-heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;EXPORT INFORMATION</div>
							
							<div class="panel-body"> 
<form name="form" method="POST" action="exportblooddistribution.php" style=" ">
<!--<div class="form-group">-->
<p style="   "> Search<input type="text" name="search" placeholder="disease e.g Malaria">
<input type="submit" value="submit"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 
                                        


</p>
<!--</div>-->
</form>                             
 </div>                           
							<div class="panel-body"> 
							
						<?php 
						$tiwo = ltrim($Kondwani);
						if(isset($_POST['search'])){
						//$search=$_POST["search"];
						
						  $query="SELECT patient_blood_distribution.amount_of_blood as amount,
		patient_blood_distribution.date_of_distribution as date,
        blood_component.blood_component as Blood_Given,
        hospital_info.hospital_name as hospital,
        patient_info.fname as fname,
         patient_info.lname as lname,
         patient_info.sex as gender,
		diseases.disease_name as disease
        
        FROM bds.diseases,
        bds.patient_info,
        bds. hospital_info, 
        bds.blood_component, 
        bds.patient_blood_distribution,
		bds.users
        
        where patient_blood_distribution.blood_id=blood_component.blood_component_id AND
		
		        diseases.disease_name LIKE '".$_POST['search']."' AND 
				patient_blood_distribution.hospital_id=hospital_info.hospital_id AND
                patient_blood_distribution.patient_id=patient_info.patient_id AND
                patient_blood_distribution.disease_id=diseases.disease_id AND
				users.username='".$tiwo."' AND
                users.hospital_id= patient_blood_distribution.hospital_id";
				
						  $result = mysqli_query($connection, $query);
						  
						?>						   
						  
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" style="width:100%"> 
                                    <thead>
                                        <tr> 
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Sex</th>
											<th>Amount of blood</th>
											<th>Blood type</th>
											<th>Disease</th>
											<th>Hospital</th>
											<th>Date</th>
                                        </tr>
                                    </thead>
<?php  
while($row=mysqli_fetch_array($result)){ ?>
<tr>
<td> <?php echo $row['fname']; ?> </td>
<td> <?php echo $row['lname']; ?> </td>
<td> <?php echo $row['gender']; ?> </td>
<td> <?php echo $row['amount']; ?> </td>
<td> <?php echo $row['Blood_Given']; ?> </td>
<td> <?php echo $row['disease']; ?> </td>
<td> <?php echo $row['hospital']; ?> </td>
<td> <?php echo $row['date']; ?> </td>


 </tr>									

<?php 

}

						}		?>
                         
                                </table>  



								</div>
                            </div>  




							
                        </div> 
                        
                    </div>                     
                                       
                </div>                 
            </div>             
        </div> 


      
        <!-- CONTENT-WRAPPER SECTION END-->         
        <footer style="margin-top:50px;" class=" navbar-fixed-bottom"> 
            <div class="container"> 
                <div class="row"> 
                     <div class="col-md-12"> 
                &copy; 2017 | BDS : 
                <a href="#" target="_blank">BLOOD DONATION SYSTEM</a> 
            </div>                   
                </div>                 
            </div>             
        </footer>         
        <!-- FOOTER SECTION END-->         
        <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->         
        <!-- CORE JQUERY SCRIPTS -->         
        <script src="../assets/js/jquery-1.11.1.js"></script>         
        <!-- BOOTSTRAP SCRIPTS  -->         
        <script src="../assets/js/bootstrap.js"></script>    




	<!--addded-->
	
	
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.table2excel.js"></script>
<script type="text/javascript" src="exportToExcel.js"></script>
	
    </body>     
</html>
