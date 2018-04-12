<?php require 'inc/header.php';

include("controleur/controleur.php");

if(!empty($_POST))
{
	$erreurs = array();

	if(empty($_POST['NOMC']) && !preg_match('/[a-z]/', $_POST['NOMC']))
	{
		$erreurs['NOMC'] = "Remplissez le champs du Nom avec des caractères valides !";
	}
	if(empty($_POST['PRENOMC']) && !preg_match('/[a-z]/', $_POST['PRENOMC']))
	{
		$erreurs['PRENOMC'] = "Remplissez le champs du Prénom avec des caractères valides !";
	}
	if(empty($_POST['CODE_TYPEC']) && !preg_match('/[a-z]/', $_POST['CODE_TYPEC']))
	{
		$erreurs['CODE_TYPEC'] = "Remplissez le champs de la Catégorie client avec des caractères valides !";
	}
	if(empty($_POST['MDPC']) && !preg_match('/a{6,25}/', $_POST['MDPC']))
	{
		$erreurs['MDPC'] = "Remplissez le champs du Mot de ";
	}
	if(empty($_POST['NOMC']) && !preg_match('/[a-z]/', $_POST['NOMC']))
	{
		$erreurs['NOMC'] = "Remplissez le champs du Nom";
	}
	if(empty($_POST['NOMC']) && !preg_match('/[a-z]/', $_POST['NOMC']))
	{
		$erreurs['NOMC'] = "Remplissez le champs du Nom";
	}

	var_dump($erreurs);
}

?>

</br>
</br>
</br>
<h1>Formulaire d'inscription</h1>

				<form method="post" action="">
					<div class="form-group">

						<label for="">Nom</label>

						<input type="text" name="NOMC" value="<?php if(isset($resultat)) echo $resultat['NOMC'] ; ?>" class="form-control" required></br>

						<label for="">Prénom</label>

						<input type="text" name="PRENOMC" value="<?php if(isset($resultat)) echo $resultat['PRENOMC'] ; ?>" class="form-control" required></br>


						<label for="">Catégorie de client</label>

						<input type="text" name="CODE_TYPEC" value="<?php if(isset($resultat)) echo $resultat['CODE_TYPEC'] ; ?>" class="form-control" required></br>


						<label for="">Mot de passe</label>

						<input type="password" name="MDPC" value="<?php if(isset($resultat)) echo $resultat['MDPC'] ; ?>" class="form-control" required></br>


						<label for="">Email</label>

						<input type="text" name="MAIL" value="<?php if(isset($resultat)) echo $resultat['MAIL'] ; ?>" class="form-control" required></br>


						<label for="">Adresse</label>

						<input type="text" name="ADRESSEC" value="<?php if(isset($resultat)) echo $resultat['ADRESSEC'] ; ?>" class="form-control" required></br>


						<label for="">Code postal</label>

						<input type="int" name="CPC" value="<?php if(isset($resultat)) echo $resultat['CPC'] ; ?>" class="form-control" required></br>


						<label for="">Téléphone</label>

						<input type="int" name="TELC" value="<?php if(isset($resultat)) echo $resultat['TELC'] ; ?>" class="form-control" required></br>


						<label for="">Date de naissance</label>

						<input type="date" name="DATENAISSC" value="<?php if(isset($resultat)) echo $resultat['DATENAISSC'] ; ?>" class="form-control" required></br>

						
						<input type="hidden" name="IDC" value="<?php if(isset($resultat)) echo $resultat['IDC'] ; ?>">
						</div>

						
						<input type="reset" name="Annuler" value="Annuler">
						<input type="submit" name="Enregistrer" value="S'inscrire"> 
				</form>
			</br>
				<a href="index.php?">Retour à l'accueil</a>
			

			<?php

			if(isset($_POST["Enregistrer"]))
				{
					insertClientC($_POST);
				}

			?>

<?php require 'inc/footer.php'; ?>
