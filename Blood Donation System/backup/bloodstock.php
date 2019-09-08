<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bds";


// content="text/plain; charset=utf-8"
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_bar.php');

$x_axis = array();
$y_axis = array();
$i = 0;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT DISTINCT hospitalstock.blood_component as blood_component, hospitalstock.hospital_name as hospital_name, SUM(hospitalstock.amount) as amount
        from users, hospital_info, hospitalstock  
							
                                                   		WHERE username='alfred' AND
													users.hospital_id=hospital_info.hospital_id AND
													hospitalstock.hospital_name=hospital_info.hospital_name
													
													GROUP BY hospitalstock.blood_component ";
$result = $conn->query($sql);

while($row  = mysqli_fetch_array($result)) {
$x_axis[$i] =  $row["blood_component"];
$y_axis[$i] = $row["amount"];

    $i++;
}

$conn->close();


// Setup the graph
$graph = new Graph(800,600,'auto');
//$graph->img->SetAntiAliasing();
$graph->SetScale("textlin");

$graph->yaxis->SetTickPositions(array(), array()); 
$graph->SetBox(false);

$graph->ygrid->SetFill(false);

$graph->xaxis->SetTickLabels($x_axis);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->title->Set("Blood Distribution Levels");
$graph->title->SetFont(FF_COMIC,FS_BOLD);




$graph->xaxis->SetLabelAngle(45);
$graph->xaxis->SetTickLabels($x_axis);
$graph->xaxis->SetFont(FF_VERDANA,FS_BOLD,8);;
$graph->xaxis->SetLabelAngle(45);

 
// Use 20% "grace" to get slightly larger scale then min/max of
// data


// Create the first line
$p1 = new BarPlot($y_axis);
$graph->Add($p1);


$p1->SetColor("white");
$p1->SetWidth(45);
$p1->SetFillGradient("#990033","white", GRAD_LEFT_REFLECTION);






$graph->legend->SetFrameWeight(4);

// Output line
$graph->Stroke();

?>

