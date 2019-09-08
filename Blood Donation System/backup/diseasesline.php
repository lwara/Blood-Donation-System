<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bds";


// content="text/plain; charset=utf-8"
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_line.php');

$x_axis = array();
$y_axis = array();
$i = 0;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="SELECT bloodamount, disease_name FROM bds.matenda";
$result = $conn->query($sql);

while($row = mysqli_fetch_array($result)) {
$x_axis[$i] =  $row["disease_name"];
$y_axis[$i] = $row["bloodamount"];
    $i++;
}

$conn->close();


// Setup the graph
$graph = new Graph(600,400);

$graph->img->SetAntiAliasing();
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->title->Set("Blood Distribution Line Graph");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->SetLabelAngle(45);
$graph->xaxis->SetTickLabels($x_axis);
$graph->xaxis->SetFont(FF_VERDANA,FS_BOLD,8);;
$graph->xaxis->SetLabelAngle(45);
$graph->ygrid->SetLineStyle('dotted');
 
// Use 20% "grace" to get slightly larger scale then min/max of
// data
$graph->yscale->SetGrace(0);

// Create the first line
$p1 = new LinePlot($y_axis);
$p1->mark->SetType(MARK_FILLEDCIRCLE);
$p1->mark->SetFillColor("red");
$p1->mark->SetWidth(4);
$p1->SetColor("blue");

$p1->SetCenter();

$graph->Add($p1);

$graph->legend->SetFrameWeight(4);

// Output line
$graph->Stroke();

?>

