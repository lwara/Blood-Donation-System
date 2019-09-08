<?php // content="text/plain; charset=utf-8"
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bds";

require_once ('src/jpgraph.php');
require_once ('src/jpgraph_line.php');

$datay1 = array();
$datay2 = array();

$x_axis = array();
$y_axis = array();

$i = 0;


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="SELECT bloodamount, disease_name FROM bds.matendafirsthalf";
$result = $conn->query($sql);

while($row = mysqli_fetch_array($result)) {
$x_axis[$i] =  $row["disease_name"];
$y_axis[$i] = $row["bloodamount"];
    $i++;
}

$conn->close();

// Setup the graph
$graph = new Graph(300,250);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Filled Y-grid');
$graph->SetBox(false);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels(array('A','B','C','D'));
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Line 1');

// Create the second line
$p2 = new LinePlot($datay2);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Line 2');

// Create the third line


$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();

?>

 