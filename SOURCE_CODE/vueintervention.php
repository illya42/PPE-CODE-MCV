<left>
	<h2> Planning des interventions </h2>
	<br/>
	<table border = 0>
		<tr><th>Code de l'intervention</th>
			<th>Code du type d'intervention</th>
			<th>Libellé</th>
			<th>Durée</th>
			<th>Commentaire</th>
			<th>État</th>
			<th>Actions</th>
		</tr>
		<?php
		foreach ($resultats as $unResultat) 
		{
			echo "<tr>
			<td>".$unResultat['codeI']."</td>
			<td>".$unResultat['codeT_I']."</td>
			<td>".$unResultat['libelle']."</td>
			<td>".$unResultat['duree']."</td>
			<td>".$unResultat['commentaire']."</td>
			<td>".$unResultat['etat']."</td>

			<td> 	<a href='index.php?page=6&action=X&codeI=".$unResultat['codeI']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=6&action=E&codeI=".$unResultat['codeI']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
		}
		?>
		</table>
		<br/>
			<h2>Ajout d'une intervention</h2>
				<form method="post" action="">

					<table border= 0 >
						<tr><td>Type d'intervention : </td> <td> 
								<select name="codeT_I" value="<?php if(isset($resultat)) echo $resultat['codeT_I'] ; ?>">
						<option value="1"> Maintenance </option>
						<option value="2"> Installation </option>
						<option value="3"> Réparation </option>
						</select>

						<tr><td>Durée : </td> <td> <input type="text" name="duree" value="<?php if(isset($resultat)) echo $resultat['duree'] ; ?>"></td></tr>
						<tr><td>Commentaire : </td> <td> <input type="text" name="commentaire" value="<?php if(isset($resultat)) echo $resultat['commentaire'] ; ?>"></td></tr>
						<tr><td>État : </td> <td> <input type="date" name="etat" value="<?php if(isset($resultat)) echo $resultat['etat'] ; ?>"></td></tr>
						
						</br>
						<tr>
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="codeI" value="<?php if(isset($resultat)) echo $resultat['codeI'] ; ?>">
				</form>
</left>