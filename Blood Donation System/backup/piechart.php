<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bds";


// content="text/plain; charset=utf-8"
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_pie.php');
require_once ('src/jpgraph_pie3d.php');

$data= array();
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
$data[$i] =  $row["bloodamount"];
$y_axis[$i] = $row["disease_name"];
    $i++;
}

$conn->close();
//create the graph pie
$graph=new PieGraph(350,250);

$theme_class=new VividTheme;
$graph ->SetTheme($theme_class);


//Set A title for the plot
$graph ->title ->Set("A Simple 3D Pie Plot");


//create
$p1 = new PiePlot3D($data);
$graph ->Add($p1);
//$graph->xaxis->SetTickLabels($y_axis);
//$p2=0.13;
$p1 ->ShowBorder();
$p1 ->SetColor('black');
$p1 ->ExplodeSlice(1);
//$p1 ->SetLabelType(PIE_VALUE_PER);
//$p1 ->SetLabels($y_axis);
$p1 ->SetLegends($y_axis);
//$p1 ->SetSize($p2);
$graph ->Stroke();
?>