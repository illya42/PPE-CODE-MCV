<?php
	require 'inc/header.php';

	include("controleur/controleur.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" media="all" />
	</br>
	</br>
	</br>
	<title> Roilles : Location et maintenance </title>
</head>
<body>
	<center>
		<h1> Roilles SA </h1>
	</center>
	
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
			<a href="index.php?page=6"> Planning
			</a><br/><br/>
			<a href="connection.php"> Mon Profil
			</a><br/><br/>
			<a href="index.php?"> Retour à l'accueil
			</a></td></tr>
			
		</tr>

		</table>
	</left>

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
			

# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
#       TABLE : MATERIEL
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
			
			case 1:

			if(isset($_GET['action']) && isset($_GET['codeM']))
				{
					$action = $_GET['action'];
					$codeM = $_GET['codeM'];
					if($action == "X")
					{
						deleteMaterielC($codeM);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdMaterielC ($codeM);
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

# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
#       TABLE : TECHNICIEN
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------

			case 2:

			if(isset($_GET['action']) && isset($_GET['codeT']))
				{
					$action = $_GET['action'];
					$codeT = $_GET['codeT'];
					if($action == "X")
					{
						deleteTechnicienC($codeT);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdTechnicienC ($codeT);
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

# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
#       TABLE : CONTRAT
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------

			case 3:

			if(isset($_GET['action']) && isset($_GET['code_contrat']))
				{
					$action = $_GET['action'];
					$code_contrat = $_GET['code_contrat'];
					if($action == "X")
					{
						deleteContratC($code_contrat);
					}
					else if ($action == "E")
					{
						$resultat = selectWherecodeContratC ($code_contrat);
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


# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
#       TABLE : RESERVATION
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------

			case 4:

			if(isset($_GET['action']) && isset($_GET['reservation']))
				{
					$action = $_GET['action'];
					$codeR = $_GET['codeR'];
					if($action == "X")
					{
						deleteReservationC($codeR);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdReservationC ($codeR);
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

# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
#       TABLE : CLIENT
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------

			case 5:

			if(isset($_GET['action']) && isset($_GET['codeC']))
				{
					$action = $_GET['action'];
					$codeC = $_GET['codeC'];
					if($action == "X")
					{
						deleteClientC($codeC);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdClientC ($codeC);
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

				$resultats = selectAllClientC ();
				include("vue/vueclient.php");
			break;

# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------
#       TABLE : PROFIL
# -----------------------------------------------------------------------------
# -----------------------------------------------------------------------------


			case 6:

			
				$resultats = selectWhereIdClientC ($codeC);

				if(isset($_POST['Modifier']))
				{
					updateClientC($_POST) ;
					$resultat = null;
				}

				if(isset($_POST["Enregistrer"]))
				{
					insertClientC($_POST);
				}
				
				include("vue/vueprofil.php");
			break;

		}
		?>

	</body>
	</html>

<?php require 'inc/footer.php'; ?>