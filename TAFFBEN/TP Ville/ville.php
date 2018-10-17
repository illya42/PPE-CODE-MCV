<?php // content="text/plain; charset=utf-8"
include ('jpgraph-4.2.4\src\jpgraph.php');
include ('jpgraph-4.2.4\src\jpgraph_pie.php');
// Some data
$data = array(40,21,17,14,23);

// Create the Pie Graph. 
$graph = new PieGraph(700,500);

$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// Set A title for the plot
$graph->title->Set("Part d'habitant par ville");
$graph->SetBox(true);

// Create
$p1 = new PiePlot($data);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
$p1->ExplodeAll();
$graph->Stroke();

?>