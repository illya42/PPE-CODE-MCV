<?php
//SERT A CONTROLER / FAIRE DES VERIFICATIONS
include("modele/modele.php");
//	CONNECTION
	function connectionC()
	{
	session_start();
	//connexion à la BDD
	$con = connexion();
	if(isset($_POST['formconnexion']))
	{
		$mailconnect=htmlspecialchars($_POST['mailconnect']);
		$mdpconnect=sha1($_POST['mdpconnect']);
		if(!empty($mailconnect) AND !empty($mdpconnect))
		{
			$requser=$bdd->prepare("SELECT * FROM membres WHERE mail= ? AND mdp = ?");
			$requser->execute(array($mailconnect, $mdpconnect));
			$userexist = $requser->rowCount();
			if($userexist==1)
			{
				$userinfo=$requser->fetch();
				$_SESSION['id']=$userinfo['id'];
				$_SESSION['pseudo']=$userinfo['pseudo'];
				$_SESSION['mail']=$userinfo['mail'];
				header("Location: profil.php?id=".$_SESSION['id']);
			}
			else
			{
				$erreur= "Mauvais mail ou mot de passe";
			}
		}
		else
		{
			$erreur="Tous les champs doivent être complétés !";
		}
	}
	deconnexion($con);
	}
// DECONNECTION
	function deconnection();
	{ 
	session_start();
	$_SESSION=array();
	session_destroy();
	header=("Location: modele/modele.php")
	}
?>
