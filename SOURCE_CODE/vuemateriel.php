<left>
	<h2> Liste des materiels enregistres </h2>
	<br/>
	<table border = 1>
		<tr> 	<td>Image</td>
				<td>Numero de série</td>
				<td>Type du matériel</td>
				<td>Article</td>
				<td>Notice d'entretien</td>
				<td>Prix par jour</td>
				<td>Poids</td>
				<td>Actions</td>
		</tr>
		<?php
		foreach ($resultats as $unResultat) {
			echo "<tr>
			<td>IMAGE DU MARTEAU PIQUEUR</td>
			<td>".$unResultat['NUM_SERIE']."</td>
			<td>".$unResultat['CODE_TYPEM']."</td>
			<td>".$unResultat['NOMM']."</td>
			<td>".$unResultat['NOTICE_ENTRETIEN']."</td>
			<td>".$unResultat['PRIX_JOUR']."</td>
			<td>".$unResultat['POIDS']."</td>
			<td>
			
			<a href='index.php?page=1&action=X&NUM_SERIE=".$unResultat['NUM_SERIE']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=1&action=E&NUM_SERIE=".$unResultat['NUM_SERIE']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";

		}
		?>
		</table>
		<br/>
			<h2>Ajout de Matériel</h2>
				<form method="post" action="">

					<table border= 7 >
						<tr><td>Article : </td> <td> <input type="text" name="NOMM" value="<?php if(isset($resultat)) echo $resultat['NOMM'] ; ?>"></td></tr>
						<tr><td>Type matériel : </td> <td> <input type="text" name="CODE_TYPEM" value="<?php if(isset($resultat)) echo $resultat['CODE_TYPEM'] ; ?>"></td></tr>
						<tr><td>Notice d'entretien : </td> <td> <input type="text" name="NOTICE_ENTRETIEN" value="<?php if(isset($resultat)) echo $resultat['NOTICE_ENTRETIEN'] ; ?>"></td></tr>
						<tr><td>Prix par jour : </td> <td> <input type="text" name="PRIX_JOUR" value="<?php if(isset($resultat)) echo $resultat['PRIX_JOUR'] ; ?>"></td></tr>
						<tr><td>Poids : </td> <td> <input type="text" name="POIDS" value="<?php if(isset($resultat)) echo $resultat['POIDS'] ; ?>"></td></tr>
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="NUM_SERIE" value="<?php if(isset($resultat)) echo $resultat['NUM_SERIE'] ; ?>">
				</form>
</left>