<left>
	<h2> Liste des materiels enregistres </h2>
	<br/>
	<table border = 2>
		<tr> 	<td>Numero de série</td>
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
			
			<td>".$unResultat['codeM']."</td>
			<td>".$unResultat['codeT_M']."</td>
			<td>".$unResultat['nom']."</td>
			<td>".$unResultat['notice']."</td>
			<td>".$unResultat['prix']."</td>
			<td>".$unResultat['poids']."</td>
			<td>
			
			<a href='index.php?page=1&action=X&codeM=".$unResultat['codeM']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=1&action=E&codeM=".$unResultat['codeM']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";

		}
		?>
		</table>
		<br/>
			<h2>Ajout de Matériel</h2>
				<form method="post" action="">

					<table border= 0 >

						<tr><td>Article : </td> <td> <input type="text" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>"></td></tr>
						<tr><td>Numéro de série : </td> <td> <input type="text" name="codeM" value="<?php if(isset($resultat)) echo $resultat['codeM'] ; ?>"></td></tr>
						<tr><td>Type matériel : </td> <td> <input type="text" name="codeT_M" value="<?php if(isset($resultat)) echo $resultat['codeT_M'] ; ?>"></td></tr>
						<tr><td>Notice d'entretien : </td> <td> <input type="text" name="notice" value="<?php if(isset($resultat)) echo $resultat['notice'] ; ?>"></td></tr>
						<tr><td>Prix par jour : </td> <td> <input type="text" name="prix" value="<?php if(isset($resultat)) echo $resultat['prix'] ; ?>"></td></tr>
						<tr><td>Poids : </td> <td> <input type="text" name="poids" value="<?php if(isset($resultat)) echo $resultat['poids'] ; ?>"></td></tr>
						</br>
						<tr>
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="codeM" value="<?php if(isset($resultat)) echo $resultat['codeM'] ; ?>">
				</form>
</left>