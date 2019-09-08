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
    </head>     
    <body> 
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
                                            <a role="menuitem" tabindex="-1" href="addpatient.php?name=".$var_value>Add Patients</a>
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
                                            <a role="menuitem" tabindex="-1" href="blooddiseases.php?varname=".$var_value>Blood Distribution</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="bloodstock.php?varname=".$var_value>Blood Stock</a>
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
        <div class="content-wrapper" style="margin-top:150px"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <h1 class="page-head-line">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-gears (alias) fa-3x" style="border:solid grey 1px;border-radius:50%;"></i> ADD PATIENT DETAILS</h1>
                        <div class="btn-toolbar" role="toolbar" style="margin-left:350px"> 
                            <div class="btn-group"> 
                                <a href="editpatient.php?varname=".$var_value class="btn btn-primary" role="button" style="width:120px;background-color:#E60000; color:white; border-radius:10px">view </a>                                 
                            </div>
                            <div class="btn-group" style="margin-left:50px;"> 
                                <a href="editpatient.php?varname=".$var_value class="btn btn-primary" role="button" style="background-color:#660000;color:white; border-radius:10px">Edit Information</a>
                            </div>                             
                            <div class="btn-group" style="margin-left:50px"> 
                                <a href="addpatient.php?varname=".$var_value class="btn btn-primary" role="button" style="background-color:#990000; color:white;border-radius:10px">Add Patient</a>                                 
                            </div>
                        </div>                           
                        <br> 
                    </div>                     
                </div>  
               
                <div class="row" style="margin-right:150px; margin-left:350px;"> 
                    <div class="col-md-10" style="border-radius:8px"> 
                        <div class="panel panel-default"> 
                            <div class="panel-heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ADD PATIENTS INFORMATION</div>                             
                            <div class="panel-body"> 
							
								<?php 
 
  //$var_value=$_REQUEST['name'];
  //echo $var_value;

 
 ?>
                                <form method="POST" action="addpatient.php"> 
                                    <div class="form-group"> 
                                        <label for="exampleInputEmail1" class="control-label">First Name</label>                                         
                                        <input type="text"  name="firstname" class="form-control" id="exampleInputEmail1" placeholder="First name"/> 
                                    </div>  
									
                                    <div class="form-group"> 
                                        <label for="exampleInputEmail1" class="control-label">Last Name</label>                                         
                                        <input type="text"  name="lastname" class="form-control" id="exampleInputEmail1" placeholder="last name"/> 
                                    </div>  									
                                    <div class="form-group"> 
                                        <label>Gender</label>
                                        <select class="form-control"  name="gender">
                                            <option>Female</option>
                                            <option>Male</option>
                                          </select>
                                    </div>

									<div class="form-group"> 
                                        <label for="exampleInputEmail1" class="control-label">Date Of Birth</label>                                         
                                        <input type="text"  name="dob" class="form-control" id="exampleInputEmail1" placeholder="year-month-day"/> 
                                    </div>
									                                     
                                    <div class="form-group"> 
                                        <label>Blood Group</label>
										<?php
                  $sql = "SELECT * FROM blood_component";
                  
                  $result =mysqli_query($connection,$sql);
                                
                  echo "<select name='blood' class='form-control select' id ='MBTS_id'  >";
 
                  while($row = mysqli_fetch_array($result))
                  {
                     echo "<option value='".$row['blood_component_id']."'>".$row['blood_component']."</option>";
                  }  
                  echo"</select>";
                ?>
                                       
                                    </div>                                     
                                    <div class="checkbox"> 
</div>                                     
                                    <button type="submit" class="btn btn-default">Add</button>                                     
                                    <hr /> 
                                          
                                           
                                           
                                </form>                                 
                            </div>                             
                        </div>                         
                    </div>  
<?php


if(isset($_POST['firstname'], $_POST['lastname'], $_POST['gender'], $_POST['dob'], $_POST['blood'] ))
{
	
$sql = "INSERT INTO patient_info(fname,
								lname,
								sex,
								date_of_birth,
								blood_group_id)
								
        VALUES ('$_POST[firstname]',
				'$_POST[lastname]', 
				'$_POST[gender]',
				'$_POST[dob]',
				'$_POST[blood]')";
				 
        
			

if(mysqli_query($connection, $sql))
{
	$message="record has been added";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
else "Error: ".mysqli_error($connection);


mysqli_close($connection);
}
?>	
				
                    <div class="col-md-6"> 
</div>                     
                </div>                 
            </div>             
        </div>         
        <!-- CONTENT-WRAPPER SECTION END-->         
         <footer class="navbar-fixed-bottom">  
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
    </body>     
</html>
