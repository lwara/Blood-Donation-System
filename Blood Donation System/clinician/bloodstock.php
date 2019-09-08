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
								
                                    <li style="background-color:#800000">
									
									<a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown" style="background-color:#4C0000; color:white">&nbsp;&nbsp;&nbsp;REQUEST BLOOD<i class="fa fa-angle-down"></i></a> 
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem" style="background-color:#800000">
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="bloodrequest.php?varname=".$var_value>MBTS</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="bloodrequest.php?varname=".$var_value>OTHER HOSPITALS</a>
                                        
                                    </ul>
									
									</li>
									</li>
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

 

<div class="content-wrapper" style="margin-top:150px"> 
	
            <div class="container"> 
                <div class="row">
				
				
				
                    <div class="col-md-12"> 
                        <h4  name="username" class="page-head-line">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-dashboard (alias) fa-3x" style=""></i> BLOOD STOCK
						   
						
                    </div>                     
                </div>                 
                <div class="row"> 
              <div class="panel-body"> 
			  <?php
			  $tiwo = ltrim($Kondwani);
						    $query= " SELECT DISTINCT hospitalstock.blood_component as blood_component, hospitalstock.hospital_name as hospital_name, SUM(hospitalstock.amount) as amount
        from users, hospital_info, hospitalstock  
							
                                                   		WHERE username='$tiwo' AND
													users.hospital_id=hospital_info.hospital_id AND
													hospitalstock.hospital_name=hospital_info.hospital_name
													
													GROUP BY hospitalstock.blood_component ";
						
					$result = mysqli_query($connection, $query);
						  
						?>						   
						  
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" style="width:100%"> 
                                    <thead>
                                        <tr> 
                                            <th>BLOOD TYPE</th>
                                            <th>AMOUNT</th>
											<th>HOSPITAL</th>
											<th>STATUS</th>
                                            
                                        </tr>
                                    </thead>
<?php while($row3=mysqli_fetch_array($result)){ ?>
<tr>
<td> <?php echo $row3['blood_component']; ?> </td>
<td> <?php echo $row3['amount']; ?> </td>
<td> <?php echo $row3['hospital_name']; ?> </td>
<td> <?php 
if($row3['amount'] < 500){


 
echo"<a href='bloodrequest.php'  role='button' style='background-color:#990000; color:white; border-radius:4px'>".'CRITICAL'."</a>" ;
}
elseif ($row3['amount'] > 500 && $row3['amount'] < 900 ){
echo"<a href='#'  role='button' style='background-color:#00CC66; color:white; border-radius:4px'>".'NORMAL'."</a>" ;
}
	
elseif ($row3['amount'] > 1000 ){
echo"<a href='#'  role='button' style='background-color:#66FFFF; color:white; border-radius:4px'>".'GOOD'."</a>" ;
}	
?> </td>

  </tr>									

<?php }?>
                            
                                </table>                                 
                            </div> 
            </div>  
<!--<img src="../backup/bloodstock.php">-->			
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
