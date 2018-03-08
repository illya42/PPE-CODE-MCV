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

session_start();

//connexion à la BDD
$con = connexion();

if(isset($_SESSION['idc']))
{
	$requser = $bdd->prepare("SELECT * FROM client where idc = ?");
	$requser->execute(array($_SESSION['idc']));
	$user=$requser->fetch();
	if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'])
	{
		$newpseudo = htmlspecialchars($_POST['newpseudo']);
		$insertpseudo=$bdd->prepare("UPDATE client SET pseudo = ? WHERE idc = ?");
		$insertpseudo->execute(array($newpseudo, $_SESSION['idc']));
		header('Location: profil.php?idc='.$_SESSION['idc']);
	}

	if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail'])
	{
		$newmail = htmlspecialchars($_POST['newmail']);
		$insertmail=$bdd->prepare("UPDATE client SET mail = ? WHERE idc = ?");
		$insertmail->execute(array($newmail, $_SESSION['idc']));
		header('Location: profil.php?idc='.$_SESSION['idc']);
	}

	if(isset($_POST['newmdp']) AND !empty($_POST['newmdp']) AND $_POST['newmdp'] != $user['mdp'] AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
	{
		$mdp= sha1($_POST['newmdp']);
		$mdp2= sha1($_POST['newmdp2']);
		if($mdp==$mdp2)
		{
			$insertmdp=$bdd->prepare("UPDATE client SET mdpc = ? WHERE idc = ?");
			$insertmdp->execute(array($mdp, $_SESSION['idc']));
			header('Location: profil.php');
		}
		else
		{
			$msg = "Vos deux mots de passe ne correspondent pas !";
		}
	}

	if(isset($_POST['newpseudo']) AND $_POST['newpseudo']== $user['pseudo'])
	{
		header('Location: profil.php');
	}


	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
</head>
<body>
	<div align="center">
		<h2>Edition de mon profil</h2>
		<div align="left">
			<form method="POST" action="">
				<label>Pseudo :</label>
				<input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" /> <br/><br/>
				<label>Mail :</label>
				<input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" /> <br/><br/>
				<label>Mot de passse :</label>
				<input type="password" name="newmdp" placeholder="Mot de passe"/> <br/><br/>
				<label>Confirmation du mot de passe :</label>
				<input type="password" name="newmpd2" placeholder="Confirmation du mot de passe"/> <br/><br/>
				<input type="submit" name="Mettre à jour mon profil !">
			</form>
			<?php if (isset($msg)) {echo $msg;} ?>
		</div>	
	</div>	
</body>
</html>
<?php
}
else
{
	header("Location: connexion.php");
}
?>
