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
        <!-- MENU SECTION END-->         
        <div class="content-wrapper" style="margin-top:150px"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <h1 class="page-head-line">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-gears (alias) fa-3x" style="border:solid grey 1px;border-radius:50%;"></i> BLOOD REQUEST</h1>
                                                 
                        <br> 
                    </div>                     
                </div>  
               
                <div class="row" style="margin-right:150px; margin-left:350px;"> 
                    <div class="col-md-10" style="border-radius:8px"> 
                        <div class="panel panel-default"> 
                            <div class="panel-heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; REQUEST BLOOD TO MBTS</div>                             
                            <div class="panel-body"> 
							
                                 
								
								<?php 
								//$pid = $_GET['varname'];
								//echo $pid;
								
				
						   ?>
                                <form method="POST" action="bloodrequest.php"  >
 
								<?php
						   
						   

						   $tiwo = ltrim($Kondwani);
						    $query= "SELECT * from users WHERE username='".$tiwo."'";
						    //$query= "SELECT * from users WHERE username='".$_SESSION["kho"]."'";
							
							
                        $result=mysqli_query($connection,$query);
						 if($row1 = mysqli_fetch_array($result))
						 {
							//$makaniTiwo = row[""]
						   ?>
								<div class="form-group"> 
                                        <label for="exampleInputEmail1" class="control-label">username</label>                                         
                                        <input type="text"  name="username" class="form-control" id="exampleInputEmail1" value=" <?php echo $row1['fname']." ".$row1['lname']; ?>" 
onfocus ="this.blur();"/>										
                                    </div>
									
								
                                    <div class="form-group"> 
                                        <label>Blood Type</label>
										<?php
                  $sql = "SELECT * FROM blood_component";
                  
                  $result =mysqli_query($connection,$sql);
                                
                  echo "<select name='bloodtype' class='form-control select' id ='MBTS_id'  >";
                     echo "<option value=''>"." "."</option>";
                  while($row2 = mysqli_fetch_array($result))
                  {
                     echo "<option value='".$row2['blood_component_id']."'>".$row2['blood_component']."</option>";
                  }  
                  echo"</select>";
                ?>
                                       
                                    </div>    
									
                                    <div class="form-group"> 
                                        <label for="exampleInputEmail1" class="control-label">Amount of blood</label>                                         
                                        <input type="text"  name="amountofblood" class="form-control" id="exampleInputEmail1" placeholder="Enter Hospital name"/> 
                                    </div>
 									<div class="form-group">
                                    <label>Hospital Name</label>
										<?php
                  $sql = "SELECT * FROM hospital_info WHERE hospital_id=".$row1['hospital_id'];
                  
                  $result =mysqli_query($connection,$sql);
                                
                  echo "<select name='hospitalname' class='form-control select' id ='MBTS_id'  >";
					
                  while($row3 = mysqli_fetch_array($result))
                  {
					  
                     echo "<option value='".$row3['hospital_id']."'>".$row3['hospital_name']."</option>";
                  }  
                  echo"</select>";
                ?>
                                       
                                    </div> 
						 <?php } ?>
									<div class="form-group">
                                    <label>Sender</label>
										<?php
                  
                                
                  echo "<select name='sender' class='form-control select' id ='MBTS_id'  >";
					
                     echo "<option value='".$row1['user_id']."'>".$row1['fname']."".$row1['lname']."</option>";
                   
                  echo"</select>";
                ?>
                                       
                                    </div> 
									                                     
                                                                       

                                    <button type="submit" class="btn btn-default">SEND</button>                                     
                                    <hr /> 
                                          
                                           
                                           
                                </form>                                 
                            </div>                             
                        </div>                         
                    </div>  
<?php


if(isset($_POST['bloodtype'], $_POST['amountofblood'], $_POST['hospitalname'], $_POST['sender']))
{
	
$sql = "INSERT INTO blood_request_transac(blood_id,
								         blood_amount,
								         hospital_id,
								         request_status,
								         request_sender,
										 DateSent)
								 
        VALUES ('$_POST[bloodtype]','$_POST[amountofblood]','$_POST[hospitalname]','','$_POST[sender]',CURDATE())
		
		";
	
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
