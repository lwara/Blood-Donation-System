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

 

<div class="content-wrapper" style="margin-top:150px;" > 

		
            <div class="container"> 
                <div class="row">
				
				
				
                    <div class="col-md-12"> 
                        <h4  name="username" class="page-head-line">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-dashboard (alias) fa-3x" style=""></i> BLOOD AND DISEASE GRAPH
						   
						
                    </div>                     
                </div>                 
                <div class="row" style="margin-left:250px;">
<a href="blooddiseases.php?varname=".$var_value class="btn btn-primary" role="button" style="background-color:#CC66FF; border-radius:4px"> BAR GRAPH </a>
<a href="piechart.php?varname=".$var_value class="btn btn-primary" role="button" style="background-color:#CC66FF; border-radius:4px"> PIE CHARTS </a> 
<a href="firsthalf.php?varname=".$var_value class="btn btn-primary" role="button" style="background-color:#CC66FF; border-radius:4px"> PIE CHART </a>
               <img src="../backup/diseases.php">
			  
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
