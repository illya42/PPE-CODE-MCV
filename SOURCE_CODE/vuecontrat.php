<left>
	<h2> Liste des contracts enregistres </h2>
	<br/>
	<table border = 1>
		<tr><td>Numero contract</td>
			<td>Date debut</td>
			<td>Date fin</td>
			<td>Signature</td>
			<td>Etat</td>
			<td>Actions</td>
		</tr>
		<?php
		foreach ($resultats as $unResultat) 
		{
			echo "<tr>
			<td>".$unResultat['NUMC']."</td>
			<td>".$unResultat['DATE_DEBUT']."</td>
			<td>".$unResultat['DATE_FIN']."</td>
			<td>".$unResultat['SIGNATURE']."</td>
			<td>".$unResultat['ETAT']."</td>
			


			<td> 	<a href='index.php?page=3&action=X&NUMC=".$unResultat['NUMC']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=3&action=E&NUMC=".$unResultat['NUMC']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
		}
		?>
		</table>
		<br/>
			<h2>Ajout d'un Contrat</h2>
				<form method="post" action="">

					<table border= 7 >
						<tr><td>Date de début : </td> <td> <input type="date" name="DATE_DEBUT" value="<?php if(isset($resultat)) echo $resultat['DATE_DEBUT'] ; ?>"></td></tr>
						<tr><td>Date de fin : </td> <td> <input type="date" name="DATE_FIN" value="<?php if(isset($resultat)) echo $resultat['DATE_FIN'] ; ?>"></td></tr>
						<tr><td>Signature : </td> <td> <input type="text" name="SIGNATURE" value="<?php if(isset($resultat)) echo $resultat['SIGNATURE'] ; ?>"></td></tr>
						<tr><td>État : </td> <td> <input type="text" name="ETAT" value="<?php if(isset($resultat)) echo $resultat['ETAT'] ; ?>"></td></tr>
	
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="NUMC" value="<?php if(isset($resultat)) echo $resultat['NUMC'] ; ?>">
				</form>
</left>