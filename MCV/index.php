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
			<a href="index.php?page=4"> Réservation
			</a><br/><br/>
			<a href="index.php?page=5"> Client
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

			if(isset($_GET['action']) && isset($_GET['NUM_SERIE']))
				{
					$action = $_GET['action'];
					$NUM_SERIE = $_GET['NUM_SERIE'];
					if($action == "X")
					{
						deleteMaterielC($NUM_SERIE);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdMaterielC ($NUM_SERIE);
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

			if(isset($_GET['action']) && isset($_GET['IDT']))
				{
					$action = $_GET['action'];
					$IDT = $_GET['IDT'];
					if($action == "X")
					{
						deleteTechnicienC($IDT);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdTechnicienC ($IDT);
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

			if(isset($_GET['action']) && isset($_GET['NUMC']))
				{
					$action = $_GET['action'];
					$NUMC = $_GET['NUMC'];
					if($action == "X")
					{
						deleteContratC($NUMC);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdContratC ($NUMC);
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


//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! RESERVATION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

			case 4:

			if(isset($_GET['action']) && isset($_GET['reservation']))
				{
					$action = $_GET['action'];
					$NUMR = $_GET['NUMR'];
					if($action == "X")
					{
						deleteReservationC($NUMR);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdReservationC ($NUMR);
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

			case 5:

			if(isset($_GET['action']) && isset($_GET['client']))
				{
					$action = $_GET['action'];
					$IDC = $_GET['IDC'];
					if($action == "X")
					{
						deleteClientC ($IDC);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdClientC ($IDC);
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
