<?php require 'inc/header.php'; ?>

</br>
</br>
</br>
<h1>Formulaire de connection</h1>

				<form method="post" action="">

					<div class="form-group">
						
						<label for="">Email</label>

						<input type="text" name="MAILT" value="<?php if(isset($resultat)) echo $resultat['MAILT'] ; ?>" required></br>

						<label for="">Mot de passe</label>

						<input type="password" name="MDPT" value="<?php if(isset($resultat)) echo $resultat['MDPT'] ; ?>" required>

						<input type="hidden" name="IDC" value="<?php if(isset($resultat)) echo $resultat['IDC'] ; ?>">
					</div>
					
					<button type="submit" class="btn btn-primary">Se Connecter</button>
				</form>
			</br>
				<a href="index.php?">Retour à l'accueil</a>

<?php require 'inc/footer.php'; ?>