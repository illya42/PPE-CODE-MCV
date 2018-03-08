<?php
function inscription()
{
	if (isset($_POST['forminscription']))
	{
		$pseudo =htmlspecialchars($_POST['pseudo']);
		$mail =htmlspecialchars($_POST['mail']);
		$mail2 =htmlspecialchars($_POST['mail2']);
		$mdp =sha1($_POST['mdp']);
		$mdp2 =sha1($_POST['mdp2']);
		if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
		{
			$pseudolength = strlen($pseudo);
			if($pseudolength<=255)
			{
				if($mail==$mail2)
				{
					if(filter_var($mail, FILTER_VALIDATE_EMAIL))
					{
						$reqmail = $bdd->prepare("SELECT * FROM client where mail=?");
						$reqmail->execute(array($mail));
						$mailexist = $reqmail -> rowCount();
						if($mailexist==0)
						{
							if($mdp==$mdp2)
							{
								$insertmbr = $bdd->prepare("INSERT INTO client(pseudo,mail,mdpc) VALUES(?,?,?)");
								$insertmbr->execute(array($pseudo,$mail,$mdp));
								$erreur = "Votre compte a bien été créé <a href=\"connexion.php\"> Me connecter</a>";
							}
							else
							{
								$erreur= "Vos mots de passes ne correspondent pas !";
							}
						}
						else
						{
							$erreur = "Adresse mail déjà utilisée";
						}
					}
					else
					{
						$erreur="Votre adresse mail n'est pas valide";
					}
				}	
				else
				{
					$erreur="Vos adresses mails ne correspondent pas !";
				}
			}
			else
			{
				$erreur = "Votre pseudo ne doit pas dépasser 255 caractères ! ";
			}
		}
		else
		{
			$erreur="Tous les champs doivent être completés";
		}
	}
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
		<h2>Inscription</h2>
		<br/><br/><br/>
		<form method="POST" action="">
			<table>
				<tr>
					<td align="right">
						<label for="pseudo">Pseudo :</label>
					</td>
					<td align="right">
					<input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)){ echo $pseudo; }?>" />
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail">Mail :</label>
					</td>
					<td align="right">
					<input type="email" placeholder="Votre mail" id="mail" name="mail"  value="<?php if(isset($mail)){ echo $mail; }?>""/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail2">Confirmation du mail :</label>
					</td>
					<td align="right">
					<input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)){ echo $mail2; }?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mdp">Mot de passe :</label>
					</td>
					<td align="right">
					<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mdp2">Confirmation du mot de passe :</label>
					</td>
					<td align="right">
					<input type="password" placeholder="Confirmez mot de passe" id="mdp2" name="mdp2"/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="forminscription" value="S'inscrire"/>
					</td>
				</tr>
			</table>
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