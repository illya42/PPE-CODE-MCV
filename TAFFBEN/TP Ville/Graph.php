<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TP VILLE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">TP Ville - Kevin Massil Jeremy</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="Graph.php">Graphique</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Map.php">Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="RDV.php">RDV</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
    
    </header>

    <center>
    </br>
        <table border=1>
          <tr>
            <td style="font-size: 20px" class="blinking">
              Graphique des populations ! 
            </td>
          </tr>
        </table>
    </center>

    <!-- graphiques ?  -->
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

    <!-- fin graphiques ?  -->

    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
