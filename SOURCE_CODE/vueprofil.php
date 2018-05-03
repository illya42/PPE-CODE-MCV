

<left>
	<h2> Mes Infos </h2>
	<br/>
	<table border = 2>

		<tr>
		<td>ID clients</td>
		<td>Type clients</td>
		<td>Nom</td>
      	<td>Prenom</td>
     	<td>Mail</td>
      	<td>Adresse</td>
      	<td>Code postal</td>
      	<td>Telephone</td>
     	<td>Date de naissance</td>
     	<td>Actions</td>
     </tr>
		
      	<?php
		foreach ($resultats as $unResultat) {
			echo "
			<tr>
			<td>".$unResultat['IDC']."</td>
			<td>".$unResultat['CODE_TYPEC']."</td>
			<td>".$unResultat['NOMC']."</td>
			<td>".$unResultat['PRENOMC']."</td>
			<td>".$unResultat['MAIL']."</td>
			<td>".$unResultat['ADRESSEC']."</td>
			<td>".$unResultat['CPC']."</td>
			<td>".$unResultat['TELC']."</td>
			<td>".$unResultat['DATENAISSC']."</td>

				</tr>";
		}
		?>
		</table>
		<br/>
			<h2>Modifier mon profil</h2>
				<form method="post" action="">

					<table border= 0 >
						<tr><td>Nom : </td> <td> <input type="text" name="NOMC" value="<?php if(isset($resultat)) echo $resultat['NOMC'] ; ?>"></td></tr>
						<tr><td>Prénom : </td> <td> <input type="text" name="PRENOMC" value="<?php if(isset($resultat)) echo $resultat['PRENOMC'] ; ?>"></td></tr>
						<tr><td>Catégorie de client : </td> <td> <input type="text" name="CODE_TYPEC" value="<?php if(isset($resultat)) echo $resultat['CODE_TYPEC'] ; ?>"></td></tr>
						<tr><td>Mot de passe : </td> <td> <input type="text" name="MDPC" value="<?php if(isset($resultat)) echo $resultat['MDPC'] ; ?>"></td></tr>
						<tr><td>Mail : </td> <td> <input type="text" name="MAIL" value="<?php if(isset($resultat)) echo $resultat['MAIL'] ; ?>"></td></tr>
						<tr><td>Adresse : </td> <td> <input type="text" name="ADRESSEC" value="<?php if(isset($resultat)) echo $resultat['ADRESSEC'] ; ?>"></td></tr>
						<tr><td>Code postal : </td> <td> <input type="int" name="CPC" value="<?php if(isset($resultat)) echo $resultat['CPC'] ; ?>"></td></tr>
						<tr><td>Téléphone : </td> <td> <input type="int" name="TELC" value="<?php if(isset($resultat)) echo $resultat['TELC'] ; ?>"></td></tr>
						<tr><td>Date de naissance : </td> <td> <input type="date" name="DATENAISSC" value="<?php if(isset($resultat)) echo $resultat['DATENAISSC'] ; ?>"></td></tr>
						
						</br>
						<tr>
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="IDC" value="<?php if(isset($resultat)) echo $resultat['IDC'] ; ?>">
				</form>
</left>
