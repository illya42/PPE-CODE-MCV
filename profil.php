<?php
session_start();
//connexion à la BDD
if(isset($_GET['idc']) AND $_GET['idc']>0)
{
	$getid= intval($_GET['idc']);
	$requser=$bdd->prepare('SELECT * FROM client WHERE idc=?');
	$requser->execute(array($getid));
	$userinfo=$requser->fetch();
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
		<h2>Profil de <?php echo $userinfo['pseudo'];?> </h2>
		<br/><br/>
		Pseudo =  <?php echo $userinfo['pseudo'];?>
		<br/>
		 Mail = <?php echo $userinfo['mail'];?>
		 <br/>
		<?php
		if(isset($_SESSION['idc']) AND $userinfo['idc']==$_SESSION['idc'])
		{
			?>
			<a href="#" > Editer mon profil </a>
			<a href="deconnexion.php" > Se déconnecter </a>
			<?php
		}
		?>
	</div>	
</body>
</html>
<?php
}
?>