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


    <style>
input[type=text], select, input[type=password], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #15247c;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: black;
}

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #15247c;
    color: white;
}

</style>

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
              Prendre un rendez-vous !
            </td>
          </tr>
        </table>

        <!--  Debut formulaire -->
        </br>
        </br>
        </br>
        <form method="POST" action="">
        <table id="customers">

     
    <tr><td>   Nom :   </td><td><input type="text" placeholder="Votre nom" name="nom" value = "nom"> </td></tr>

    <tr><td>   Prénom :   </td><td><input type="text" placeholder="Votre prénom" name="prenom" value = "prenom"> </td></tr>

    <tr><td>   Ville : </td><td><select name="ville">
            <option value="Paris">Paris</option>
            <option value="Bruxelles">Bruxelles</option>
            <option value="Strasbourg">Strasbourg</option>
            <option value="Toulouse">Toulouse</option>
            <option value="Bordeaux">Bordeaux</option>
            <option value="Amsterdam">Amsterdam</option>
            <option value="Rouen">Rouen</option>
            <option value="Deauville">Deauville</option>
            <option value="Mulhouse">Mulhouse</option>
            <option value="Londres">Londres</option>
        </select>
        </td></tr>

    <tr>
      <td>
      </td>
      <td>
    <input type = "submit" value="Valider" />
</td>
</tr>
</table>
</form>

        <!--  Fin formulaire -->

    </center>
    </footer>

    <?php 
    if(isset($_POST['Valider']))
                {
                    $tabCli['nom']=$_POST['nom'];
                    $tabCli['prenom']=$_POST['prenom'];
                    $tabCli['ville']=$_POST['ville'];

                    $unC->setTable('RDV');
                    $unC->insert($tabCli);
                    echo"Le rendez-vous a été prit !";
                }
     ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
