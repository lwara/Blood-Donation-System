 <?php include '../database.php'; ?> 
	
 <?php  session_start(); 
 
 ?> 
 
 	<?php 
 
 $var_value=$_REQUEST['varname'];
$_SESSION["kho"] = $var_value;
 
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
        <title>BRDS</title>         
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
    <body > 
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
								
                                    <h5 style="color:white"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp; <?php echo "welcome : ".$var_value; ?> </h5>
                                </li>                                 
                                
								
</ul>							
	
                            <ul id="menu-top" class="nav navbar-nav navbar-right"> 
							
								
                                    <li style="background-color:#4C0000"><a href="acceptedTransactions.php?varname=".$var_value>VIEW ALL TRANSACTIONS</a></li> 
									<li style="background-color:#800000"><a href="processRequest.php?varname=".$var_value >PROCESS BLOOD REQUESTS</a></li> 
									&nbsp;&nbsp;
									<li>
                                    <a class="menu-top-active" href="index.php?varname=".$var_value>Dashboard</a>
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
                        <h4  name="username" class="page-head-line">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-dashboard (alias) fa-3x" style=""></i> DASHBOARD  
					</h4> 
						   
						
                    </div>                     
                </div>                 
                <div class="row"> 
                    <div class="col-md-12"> 
</div>                     
                </div>                 
                <div class="row" style="margin-left:400px; margin-right: 1px"> 
                    <div class="col-md-3 col-sm-3 col-xs-6" style="width:250px"> 
                        <div class="dashboard-div-wrapper bk-clr-two"> 
                            <i class="fa fa-hospital-o dashboard-div-icon"></i> 
                            <div class="progress progress-striped active"> 
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> 
</div>                                 
                            </div>                             
                            <a href="acceptedTransactions.php?varname=".$var_value style="color:white; text-decoration:none"><h5><h3>VIEW TRANSACTION</h3></h5> </a>
                        </div>                         
                    </div> 
                    
                    <div class="col-md-3 col-sm-3 col-xs-6" style=""> 
                        <div class="dashboard-div-wrapper bk-clr-three"> 
                            <i class="fa fa-user-plus dashboard-div-icon"></i> 
                            <div class="progress progress-striped active"> 
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
</div>                                 
                            </div>                             
                            <a href="processRequest.php?varname=".$var_value style="color:white; text-decoration:none"><h5><h3>PROCESS REQUEST</h3></h5></a> 
                        </div>                         
                    </div>                     
                                        
                </div>                 
                <div class="row"> 
</div>                 
                <hr /> 
                <hr /> 
                <div class="table-responsive"> 
</div>                 
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
