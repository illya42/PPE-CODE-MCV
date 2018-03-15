<?php
	include("controleur/controleur.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" media="all" />
	<title> Roilles : Location et maintenance </title>
</head>
<body>
	<center>
		<h1> Menu </h1>
			<a href="index.php?page=1"> Materiel
			</a><br/><br/>
			<a href="index.php?page=2"> Technicien
			</a><br/><br/>
			<a href="index.php?page=3"> Contrat
			</a><br/><br/>
			<a href="index.php?page=4"> Matériel
			</a><br/><br/>
			<a href="index.php?page=5"> Réservation
			</a><br/><br/>
			<a href="index.php?page=6"> Client
			</a><br/><br/>
	</center>

	<?php
		if (isset($_GET['page']))
		{
			$page = $_GET['page'];
		}
		else
		{
			$page = 0;
		}
		switch ($page) 
		{
			case 1:

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Materiel !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

			if(isset($_GET['action']) && isset($_GET['idc']))
				{
					$action = $_GET['action'];
					$idMateriel = $_GET['idc'];
					if($action == "X")
					{
						deleteMaterielC($idc);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdMaterielC ($idc);
					}
				}

				if(isset($_POST['Modifier']))
				{
					updateMaterielC($_POST) ;
					$resultat = null;
				}

				if(isset($_POST["Enregistrer"]))
				{
					insertMaterielC($_POST);
				}

				$resultats = selectAllC ("materiel");
				include("vue/vuemateriel.php");
			break;

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! TECHNICIEN !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

			case 2:

			if(isset($_GET['action']) && isset($_GET['idt']))
				{
					$action = $_GET['action'];
					$idtechnicien = $_GET['idt'];
					if($action == "X")
					{
						deleteTechnicienC($idt);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdTechnicienC ($idt);
					}
				}

				if(isset($_POST['Modifier']))
				{
					updateTechnicienC($_POST) ;
					$resultat = null;
				}

				if(isset($_POST["Enregistrer"]))
				{
					insertTechnicienC($_POST);
				}

				$resultats = selectAllC ("technicien");
				include("vue/vuetechnicien.php");
			break;

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! CONTRAT !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

			case 3:

			if(isset($_GET['action']) && isset($_GET['numc']))
				{
					$action = $_GET['action'];
					$idcontrat = $_GET['numc'];
					if($action == "X")
					{
						deleteContratC($numc);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdContratC ($numc);
					}
				}

				if(isset($_POST['Modifier']))
				{
					updateContratC($_POST) ;
					$resultat = null;
				}

				if(isset($_POST["Enregistrer"]))
				{
					insertContratC($_POST);
				}

				$resultats = selectAllC ("contrat");
				include("vue/vuecontrat.php");
			break;

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! MATERIEL !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

			case 4:

			if(isset($_GET['action']) && isset($_GET['materiel']))
				{
					$action = $_GET['action'];
					$idmateriel = $_GET['num_serie'];
					if($action == "X")
					{
						deleteMaterielC($idc);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdMaterielC ($idc);
					}
				}

				if(isset($_POST['Modifier']))
				{
					updateMaterielC($_POST) ;
					$resultat = null;
				}

				if(isset($_POST["Enregistrer"]))
				{
					insertMaterielC($_POST);
				}

				$resultats = selectAllC ("materiel");
				include("vue/vuemateriel.php");
			break;

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! RESERVATION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

			case 5:

			if(isset($_GET['action']) && isset($_GET['reservation']))
				{
					$action = $_GET['action'];
					$idreservation = $_GET['numr'];
					if($action == "X")
					{
						deleteReservationC($numr);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdReservationC ($numr);
					}
				}

				if(isset($_POST['Modifier']))
				{
					updateReservationC($_POST) ;
					$resultat = null;
				}

				if(isset($_POST["Enregistrer"]))
				{
					insertReservationC($_POST);
				}

				$resultats = selectAllC ("reservation");
				include("vue/vuereservation.php");
			break;

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! CLIENT !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

			case 6:

			if(isset($_GET['action']) && isset($_GET['client']))
				{
					$action = $_GET['action'];
					$idc = $_GET['idc'];
					if($action == "X")
					{
						deleteClientC ($idc);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdClientC ($idc);
					}
				}

				if(isset($_POST['Modifier']))
				{
					updateClientC($_POST) ;
					$resultat = null;
				}

				if(isset($_POST["Enregistrer"]))
				{
					insertClientC($_POST);
				}

				$resultats = selectAllC ("client");
				include("vue/vueclient.php");
				break;
		}
		?>
	</body>
	</html>
