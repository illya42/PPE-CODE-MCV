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
              Map des différentes villes !
            </td>
          </tr>

          <!--	Debut map	-->
<meta charset="utf-8">
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
            crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
		<script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = 48.852969;
			var lon = 2.349903;
			var macarte = null;

			// Nous initialisons une liste de marqueurs
			var villes = {
				"<center>Paris </br> <center>12532901 hab": { "lat": 48.852969, "lon": 2.349903 },
				"<center>Bruxelles </br> <center>1192243 hab": { "lat": 50.8503396, "lon": 4.351710300000036 },
				"<center>Strasbourg </br> <center>271782 hab": { "lat": 48.5734, "lon": 7.7521},
				"<center>Toulouse </br> <center>441802 hab": { "lat": 43.6042, "lon": 1.4436 },
				"<center>Bordeaux </br> <center>239157 hab": { "lat": 44.8377, "lon": -0.5791 },
				"<center>Londres </br> <center>8787654 hab": { "lat": 51.5073, "lon": -0.1277 },
				"<center>Rouen </br> <center>110933 hab": { "lat": 49.4432, "lon": 1.0999 },
				"<center>Deauville </br> <center>4364 hab": { "lat": 49.3539, "lon": 0.0751 },
				"<center>Mulhouse </br> <center>109588 hab": { "lat": 47.7508, "lon": 7.3358 },
				"<center>Amsterdam </br> <center>1351587 hab": { "lat": 52.3679, "lon": 4.9035 }
			};

			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 5.4);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
                    for (ville in villes) {
        var marker = L.marker([villes[ville].lat, villes[ville].lon]).addTo(macarte);
       		// Nous ajoutons la popup. A noter que son contenu (ici la variable ville) peut être du HTML
			marker.bindPopup(ville);
    }
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};

		</script>
		<style type="text/css">
			#map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
				height:700px;
			}
		</style>
		<title>Carte</title>
	</head>
	<body>
		<div id="map">
			<!-- Ici s'affichera la carte -->
		</div>

          <!--	Fin map	-->



        </table>
    </center>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
