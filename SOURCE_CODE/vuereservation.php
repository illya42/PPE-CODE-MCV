<center>
	<h2> Liste des reservations enregistres </h2>
	<br/>
	<table border = 1>
		<tr><td>Numero reservation</td>
			<td>Etat</td>
			<td>Date</td></tr>
		<?php
		foreach ($resultats as $unResultat) 
		{
			echo "<tr>
			<td>".$unResultat['numr']."</td>
			<td>".$unResultat['etat']."</td>
			<td>".$unResultat['dater']."</td>
			</tr>
			<td>
			<a href='index.php?page=5&action=X&idc=".$unResultat['numr']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=5&action=E&idc=".$unResultat['idc']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
		}
		?>
		</table>
		<br/>
			<h2>Ajout d'une Réservation</h2>
				<form method="post" action="">

					<table border= 7 >
						<tr><td>État : </td> <td> <input type="text" name="etat" value="<?php if(isset($resultat)) echo $resultat['etat'] ; ?>"></td></tr>
						<tr><td>Date : </td> <td> <input type="date" name="dater" value="<?php if(isset($resultat)) echo $resultat['dater'] ; ?>"></td></tr>
						</td></tr>
						<tr>
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="numr" value="<?php if(isset($resultat)) echo $resultat['numr'] ; ?>">
				</form>
</center>