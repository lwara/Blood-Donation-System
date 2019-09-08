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
        <div class="content-wrapper" style="margin-top:100px;"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <h1 class="page-head-line">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-gears (alias) fa-3x" style="border:solid grey 1px;border-radius:50%;"></i> PROCESS REQUEST</h1>
                                                
                        <br> 
                    </div>                     
                </div>                 
                <div class="row" style="margin-right:px; margin-left:250px"> 
                    <div class="col-md-10" style="border-radius:8px"> 
                        <div class="panel panel-default"> 
                            <div class="panel-heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BLOOD REQUEST TRANSACTIONS</div>                             
                            
							<div class="panel-body">
							
							
						
					  
                                <table id="example" class="table table-striped table-bordered" cellspacing="1" style="width:100%"> 
                                    <thead>
                                        <tr> 
                                            <th>Blood</th>
                                            <th>Amount</th>
                                            <th>Hospital</th>
											 <th>Request Status</th>
											 <th>CONDITION</th>
											
                                        </tr>
                                    </thead>

									


<tr>
<?php include 'query.php'; ?>

<?php while($row=mysqli_fetch_array($result)) { ?>
<td value="<?php echo $row['blood_id']; ?>" name="bloodid"><?php echo $row['blood_component']; ?>  </td>
<td  value="<?php echo $row['blood_amount']; ?>" name="blood">  <?php echo $row['blood_amount']; ?> </td>
<td value="<?php echo $row['hospital_id']; ?>"> <?php echo $row['hospital_name']; ?> </td>
<td value="<?php echo $row['request_status']; ?>"> <?php echo $row['request_status']; ?> </td>

<td value=" "> 
<?php 

if($row['amount'] > $row['blood_amount'] && $row['blood_id'] = $row['magazi']){
echo"<a href='#'   role='button' style='background-color:#00CC66; color:white; border-radius:4px'>".'CAN ACCEPT'."</a>" ;
}
elseif($row['amount'] < $row['blood_amount'] && $row['blood_id'] = $row['magazi']){
echo"<a href='#'  role='button' style='background-color:#66FFFF; color:white; border-radius:4px'>".'CAN NOT ACCEPT'."</a>" ;
}
?> 

</td>

 <td  name="trans">  <a href="acceptedrequest.php?pid=<?php echo $row['transac_id'];?>" class="btn btn-primary" role="button" style="background-color:#CC66FF; border-radius:4px"> Pending</a>  </td>
 
  <td name="trans">  <a href="acceptedrequest2.php?pid=<?php echo $row['transac_id'];?>" class="btn btn-primary" role="button" style="background-color:#CC66FF; border-radius:4px"> Denied</a>  </td>
   <td  name="trans">  <a href="acceptedrequest3.php?pid=<?php echo $row['transac_id'];?>" class="btn btn-primary" role="button" style="background-color:#CC66FF; border-radius:4px"> Accepted</a>  </td>
 
  </tr>									
<?php } ?>

                            <tfoot>
                                        <tr> 
                                            <th>Blood</th>
                                            <th>Amount</th>
                                            <th>Hospital</th>
											<th>Request Status</th>
                                        </tr>
                                    </tfoot>
                                </table>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                    <div class="col-md-12 text center"> 
					<ul class="pagination">
<li><a href="#">&laquo;</a></li>
<li class="active"><a href="#">1</a></li>
<li class="disabled"><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#">&raquo;</a></li>
</ul>
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
    </body>     
</html>
