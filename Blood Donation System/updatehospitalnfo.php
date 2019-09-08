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
        <div class="content-wrapper" style="margin-top:150px"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <h1 class="page-head-line">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-gears (alias) fa-3x" style="border:solid grey 1px;border-radius:50%;"></i> UPDATE HOSPITALS</h1>
                                                  
                        <br> 
                    </div>                     
                </div>  
               
                <div class="row" style="margin-right:150px; margin-left:350px;"> 
                    <div class="col-md-10" style="border-radius:8px"> 
                        <div class="panel panel-default"> 
                            <div class="panel-heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ADD HOSPITAL INFORMATION</div>                             
                            <div class="panel-body">
							
							<?php 
								$pid = $_REQUEST['pid'];
				
						   ?>
                                <form method="POST" action="update.php"  > 
								<?php
						   
						   

						   
						    $query= "SELECT * from hospital_info WHERE hospital_id=".$_REQUEST['pid'];
						   
                        $result=mysqli_query($connection,$query);
						 if($row = mysqli_fetch_array($result))
						 {
							
						   ?>
									<div class="form-group"> 
                                        <label for="exampleInputEmail1" class="control-label">Hospital ID</label>                                         
                                        <input type="text"  name="hospitalID" class="form-control" id="exampleInputEmail1" value=" <?php echo $row['hospital_id']; ?>"
										onfocus ="this.blur();"/> 
                                    </div>
                                    <div class="form-group"> 
                                        <label for="exampleInputEmail1" class="control-label">Hospital Name</label>                                         
                                        <input type="text"  name="hospitalname" class="form-control" id="exampleInputEmail1" value=" <?php echo $row['hospital_name']; ?>" /> 
                                    </div> 
                                    
                                    <div class="form-group"> 
                                        <label>District</label>
                                        <select class="form-control" name='hospital_district'>
                                                <option>
                                                    <?php echo $row['hospital_district']; ?>
                                                </option>
                                            <option>Lilongwe</option>
                                            <option>Blantyre</option>
                                            <option>Mzimba</option>                                             
                                            <option>Kasungu</option>
                                            <option>Mulanje</option>
                                            <option>Mangochi</option>
                                            <option>Dedza</option>
                                            <option>Nsanje</option>
                                            <option>Chitipa</option>
                                            <option>Karonga</option>
                                            <option>Dowa</option>
                                            <option>Ntcheu</option>
                                        </select>
                                    </div>                                     
                                    <div class="form-group">
                                            <label>Hospital Type</label>
                                            <select class="form-control" name='hospital_type'>
                                                <option>
                                                    <?php echo $row['hospital_type']; ?>
                                                </option>
                                                <option>private</option>
                                                <option>public</option>                                                 
                                            </select>
											</div>                                
                                    <div class="form-group"> 
                                        <label>MBTS Branch</label>
										        <select class="form-control" name='branch'>
												
                                                    <option style="color:#FF8080"> 
                                                        <?php echo $row['mbts_branch_id']; ?> 
                                                    </option>
                                                    <?php
                  $sql = "SELECT * FROM mbts_branch";
                  
                  $result =mysqli_query($connection,$sql);
                                
                 

                  while($row = mysqli_fetch_array($result))
                  {
                     echo "<option value='".$row['MBTS_BRANCH_ID']."'>".$row['MBTS_BRANCH_NAME']."</option>";
                  }  

				  
                  echo"</select>";
                ?>
                                       
                                    </div> 
 <?php } ?>                                      
                                    <div class="checkbox"> 
</div>                                     
                                    <button type="submit" class="btn btn-default"> Update</button>                                     
                                    <hr /> 
                                          
                                           
						       
                                </form>                                 
                            </div>                             
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
        <script src="assets/js/jquery-1.11.1.js"></script>         
        <!-- BOOTSTRAP SCRIPTS  -->         
        <script src="assets/js/bootstrap.js"></script>         
    </body>     
</html>
