<left>
	<h2> Liste des reservations enregistres </h2>
	<br/>
	<table border = 2>
		<tr><td>N° Réservation</td>
			<td>Etat</td>
			<td>Date</td>
			<td>Actions</td>
		</tr>
		<?php
		foreach ($resultats as $unResultat) 
		{
			echo "<tr>
			<td>".$unResultat['NUMR']."</td>
			<td>".$unResultat['ETAT']."</td>
			<td>".$unResultat['DATER']."</td>
			
			<td>
			<a href='index.php?page=4&action=X&NUMR=".$unResultat['NUMR']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=4&action=E&NUMR=".$unResultat['NUMR']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
		}
		?>
		</table>
		<br/>
			<h2>Ajout d'une Réservation</h2>
				<form method="post" action="">

					<table border= 0 >
						<tr><td>État : </td> <td> <input type="text" name="ETAT" value="<?php if(isset($resultat)) echo $resultat['ETAT'] ; ?>"></td></tr>
						<tr><td>Date : </td> <td> <input type="date" name="DATER" value="<?php if(isset($resultat)) echo $resultat['DATER'] ; ?>"></td></tr>
						</td></tr>
					</br>
						<tr>
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="NUMR" value="<?php if(isset($resultat)) echo $resultat['NUMR'] ; ?>">
				</form>
</left>