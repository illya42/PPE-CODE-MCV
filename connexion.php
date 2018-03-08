<?php

function connexion()
    {
    $con = mysqli_connect("localhost","root","","locationppe");
    return $con;
    }

    function deconnexion ($con)
    {
        mysqli_close($con);
    }

function connection()
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
			$requser=$bdd->prepare("SELECT * FROM client WHERE mail= ? AND mdpc = ?");
			$requser->execute(array($mailconnect, $mdpconnect));
			$userexist = $requser->rowCount();
			if($userexist==1)
			{
				$userinfo=$requser->fetch();
				$_SESSION['idc']=$userinfo['id'];
				$_SESSION['pseudo']=$userinfo['pseudo'];
				$_SESSION['mail']=$userinfo['mail'];
				header("Location: profil.php?id=".$_SESSION['idc']);
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
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Inscription</title>

		<meta charset="utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" media="all" />
		
	</head>
	<body>
		<div align="center">
			<h2>Connexion</h2>
			<br/><br/><br/>
			<form method="POST" action="">
				<input type="email" name="mailconnect" placeholder="Mail "/>
			<input type="password" name="mdpconnect" placeholder="Mot de passe "/>
			<input type="submit" name="formconnexion"  value ="Se connecter" />


			</form>
			<?php
			if(isset($erreur))
			{
				echo '<font color="red">'.$erreur.'</font>';
			}
			?>
		</div>	
	</body>
	</html>