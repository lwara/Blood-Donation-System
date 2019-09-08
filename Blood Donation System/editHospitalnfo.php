<?php  session_start(); 
 
 ?> 
 
<?php include 'database.php'; ?> 
 
 
 
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
 <link href="css/style.default.css" rel="stylesheet">
        <link href="css/morris.css" rel="stylesheet">
        <link href="css/select2.css" rel="stylesheet" />		
        <link href="assets/css/bootstrap.css" rel="stylesheet" /> 
        <!-- FONT AWESOME ICONS  -->         
        <link href="assets/css/font-awesome.css" rel="stylesheet" /> 
        <!-- CUSTOM STYLE  -->         
        <link href="assets/css/style.css" rel="stylesheet" /> 
        <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->         
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->   
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendor/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/nprogress/nprogress.css" rel="stylesheet">

    <!-- iCheck -->
    <link href="vendor/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendor/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendor/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendor/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendor/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">	
    </head>     
    <body> 
        <div class="navbar-fixed-top">		
        <div class="navbar navbar-inverse set-radius-zero " style="background:url(images3.jpg);background-repeat: no-repeat; background-size: 1550px 300px;">
                       
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
								
                                    <h5 style="color:white"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp; <?php echo "welcome : ".$var_value; ?> </h5>
                                </li>                                 
                                
								
</ul>	                            
                            <ul id="menu-top" class="nav navbar-nav navbar-right"> 
                                <li>
                                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown" style="background-color:#4C0000; color:white"><i class="fa fa-hospital-o"></i>&nbsp;&nbsp;&nbsp;MANAGE HOSPITALS <i class="fa fa-angle-down"></i></a> 
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem" style="background-color:#800000">
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="addhospital.php?varname=".$var_value>Add Hospitals</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="editHospitalnfo.php?varname=".$var_value>View Hospitals</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="editHospitalnfo.php?varname=".$var_value">Edit Information</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown" style="background-color:#800000; color:white"><i class="fa fa-users"></i>&nbsp; &nbsp; &nbsp;MANAGE USERS <i class="fa fa-angle-down"></i></a> 
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem" style="background-color:#800000">
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="addUsers.php?varname=".$var_value>Add Users</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="editUsers.php?varname=".$var_value>View Users</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="editUsers.php?varname=".$var_value>Edit Users</a>
                                        </li>
                                    </ul>
                                </li>

                                 <li>
                                    <a class="menu-top-active" href="index.php?varname=".$var_value>Dashboard</a>
                                </li>                                 
                                                               
                                <li>
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
                        <h1 class="page-head-line">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-gears (alias) fa-3x" style="border:solid grey 1px;border-radius:50%;"></i> MANAGE HOSPITALS</h1>
                        <div class="btn-toolbar" role="toolbar" style="margin-left:350px"> 
                            <div class="btn-group"> 
                                <a href="editHospitalnfo.php?varname=".$var_value class="btn btn-primary" role="button" style="width:120px;background-color:#E60000; color:white; border-radius:10px">view </a>                                 
                            </div>
                            <div class="btn-group" style="margin-left:50px;"> 
                                <a href="editHospitalnfo.php?varname=".$var_value class="btn btn-primary" role="button" style="background-color:#660000;color:white; border-radius:10px">Edit Information</a>
                            </div>                             
                            <div class="btn-group" style="margin-left:50px"> 
                                <a href="addhospital.php?varname=".$var_value" class="btn btn-primary" role="button" style="background-color:#990000; color:white;border-radius:10px">Add Hospitals</a>                                 
                            </div>
                        </div>                         
                        <br> 
                    </div>                     
                </div>                 
                <div class="row" style="margin-right:px; margin-left:250px"> 
                    <div class="col-md-9" style="border-radius:8px"> 
                        <div class="panel panel-default"> 
                            <div class="panel-heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;EDIT HOSPITAL INFORMATION</div>                             
                            
							<div class="x_panel">
							<div class="x_content"> 
							
						<?php 
						
						  $query="select * from hospital_info";
						  $result = mysqli_query($connection, $query);
						  
						?>						   
						  
                                <table class="table datatable table-bordered table table-striped table-hover" id="sample_2" cellspacing="0" style="width:100%"> 
                                    <thead>
                                        <tr> 
										
                                            <th>Hospital Name</th>
                                            <th>District</th>
                                            <th>Hospital Type</th>
                                            <th>Mbts Branch</th>
                                        </tr>
                                    </thead>
<?php

while($row=mysqli_fetch_array($result)){ 
$counter=1; ?>
<tr>

<td> <?php echo $row['hospital_name']; ?> </td>
<td> <?php echo $row['hospital_district']; ?> </td>
<td> <?php echo $row['hospital_type']; ?> </td>
<td> <?php echo $row['mbts_branch_id']; ?> </td>

<td >  <a href="deletehospital.php?pid=<?php echo $row['hospital_id'];?>" class="btn btn-primary" role="button" style="background-color:#CC66FF; border-radius:4px"> Delete</a>  </td>
 
 <td > <a href="updatehospitalnfo.php?pid=<?php echo $row['hospital_id'];?>" class="btn btn-primary" role="button" style="background-color:#99FF66; border-radius:4px"> Update</a> </td>
 </tr>									

<?php $counter++; }?>
                            <tfoot>
                                        <tr> 
                                            <th>Hospital Name</th>
                                            <th>District</th>
                                            <th>Hospital Type</th>
                                            <th>Mbts Branch</th>
                                        </tr>
                                    </tfoot>
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
        <script src="assets/js/jquery-1.11.1.js"></script>         
        <!-- BOOTSTRAP SCRIPTS  -->         
        <script src="assets/js/bootstrap.js"></script>   
 <!-- start: MAIN JAVASCRIPTS -->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
                    <script src="vendor/modernizr/modernizr.js"></script>
                    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
                    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
                    <script src="vendor/switchery/switchery.min.js"></script>
                    <!-- end: MAIN JAVASCRIPTS -->
                    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
                    <script src="vendor/select2/select2.min.js"></script>
                    <script src="vendor/DataTables/jquery.dataTables.min.js"></script>
                    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
                    <!-- start: JAVASCRIPTS -->
                    <script src="assets/js/main.js"></script>
                    <!-- start: JavaScript Event Handlers for this page -->
                    <script src="assets/js/table-data.js"></script>
                    <script>
                      jQuery(document).ready(function() {
                        Main.init();
                        TableData.init();
                      });
                    </script>
                    <!-- end: JavaScript Event Handlers for this page -->
                    <!-- end: JAVASCRIPTS -->		
    </body>     
</html>
