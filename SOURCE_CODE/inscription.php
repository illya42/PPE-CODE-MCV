<?php require 'inc/header.php'; ?>

</br>
</br>
</br>
<h1>Formulaire d'isncription</h1>

				<form method="post" action="">

						<label for="">Nom</label>

						<input type="text" name="NOMC" value="<?php if(isset($resultat)) echo $resultat['NOMC'] ; ?>"></br>

						<label for="">Prénom</label>

						<input type="text" name="PRENOMC" value="<?php if(isset($resultat)) echo $resultat['PRENOMC'] ; ?>"></br>


						<label for="">Catégorie de client</label>

						<input type="text" name="CODE_TYPEC" value="<?php if(isset($resultat)) echo $resultat['CODE_TYPEC'] ; ?>"></br>


						<label for="">Mot de passe</label>

						<input type="text" name="MDPC" value="<?php if(isset($resultat)) echo $resultat['MDPC'] ; ?>"></br>


						<label for="">Email</label>

						<input type="text" name="MAIL" value="<?php if(isset($resultat)) echo $resultat['MAIL'] ; ?>"></br>


						<label for="">Adresse</label>

						<input type="text" name="ADRESSEC" value="<?php if(isset($resultat)) echo $resultat['ADRESSEC'] ; ?>"></br>


						<label for="">Code postal</label>

						<input type="int" name="CPC" value="<?php if(isset($resultat)) echo $resultat['CPC'] ; ?>"></br>


						<label for="">Téléphone</label>

						<input type="int" name="TELC" value="<?php if(isset($resultat)) echo $resultat['TELC'] ; ?>"></br>


						<label for="">Date de naissance</label>

						<input type="date" name="DATENAISSC" value="<?php if(isset($resultat)) echo $resultat['DATENAISSC'] ; ?>"></br>

						
						<input type="hidden" name="IDC" value="<?php if(isset($resultat)) echo $resultat['IDC'] ; ?>">
						</div>

					
					<button type="submit" class="btn btn-primary">Se Connecter</button>
				</form>
			</br>
				<a href="index.php?">Retour à l'accueil</a>

<?php require 'inc/footer.php'; ?>