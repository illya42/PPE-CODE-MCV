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
		<h1> Roilles SA </h1>
	</center>
	<left>
		<h2> Connexion </h2>
		<form method="post" action="">
					<table border= 7>

						<tr><td>Email : </td> <td> <input type="text" name="MAILT" value="<?php if(isset($resultat)) echo $resultat['MAILT'] ; ?>"></td></tr>
						<tr><td>Mot de passe : </td> <td> <input type="text" name="MDPT" value="<?php if(isset($resultat)) echo $resultat['MDPT'] ; ?>"></td></tr>

							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Connexion">
							<a href="inscription.php?"> Inscription </a></td>
						</tr>
					</br>
		</form>

					</table>

					<h1> Menu </h1>


		<table border = 0>
		<tr>
			<tr><td>
			<a href="index.php?page=1"> Materiel
			</a></td></tr>
			<tr><td>
			<a href="index.php?page=2"> Technicien
			</a></td></tr>
			<tr><td>
			<a href="index.php?page=3"> Contrat
			</a></td></tr>
			<tr><td>
			<a href="index.php?page=4"> Réservation
			</a></td></tr>
			<tr><td>
			<a href="index.php?page=5"> Client
			</a></td></tr>
			<tr><td>
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
			

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Materiel !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//
			
			case 1:

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

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! INSCRIPTION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

			case 6:

			if(isset($_GET['action']) && isset($_GET['client']))
				{
					$action = $_GET['action'];
					$IDC = $_GET['IDC'];
				}

				if(isset($_POST["Enregistrer"]))
				{
					insertClientC($_POST);
				}

				$resultats = selectAllC ("client");
				include("vue/vueinscription.php");
				break;
		}
		?>

	<center>
		<p>
		<img src='image/roilles.png' width='200' height='100' >
		</br>
		
		Raison sociale :
		Roilles SA
		</br>
		Capital :
		Société anonyme au capital de 125 000€
		</br>
		Siège social : 15, place de la Liberté 18010 Bourges CEDEX
		</p>
	</center>

	</body>
	</html>