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
			<a href="index.php?page=1"> Connection
			</a><br/><br/>
			<a href="index.php?page=2"> Profil
			</a><br/><br/>
			<a href="index.php?page=3"> Inscription
			</a><br/><br/>
			<a href="index.php?page=4"> Deconnection
			</a><br/><br/>
	</center>
	<?php
		if (isset($_GET['page']))
		{
			$page = $_GET['page'];
		}else{
			$page = 0;
		}
		switch ($page) 
		{
			case 1: