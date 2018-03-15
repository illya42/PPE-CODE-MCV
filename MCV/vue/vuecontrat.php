<center>
	<h2> Liste des contracts enregistres </h2>
	<br/>
	<table border = 1>
		<tr><td>Numero contract</td>
			<td>Date debut</td>
			<td>Date fin</td>
			<td>Signature</td>
			<td>Etat</td></tr>
		<?php
		foreach ($resultats as $unResultat) 
		{
			echo "<tr>
			<td>".$unResultat['numc']."</td>
			<td>".$unResultat['date_debut']."</td>
			<td>".$unResultat['date_fin']."</td>
			<td>".$unResultat['signature']."</td>
			<td>".$unResultat['etat']."</td>
			</tr>


			<td> 	<a href='index.php?page=6&action=X&idc=".$unResultat['idc']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=6&action=E&idc=".$unResultat['idc']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
		}
		?>
		</table>
		<br/>
			<h2>Ajout d'un Contrat</h2>
				<form method="post" action="">

					<table border= 7 >
						<tr><td>Date de début : </td> <td> <input type="date" name="date_debut" value="<?php if(isset($resultat)) echo $resultat['date_debut'] ; ?>"></td></tr>
						<tr><td>Date de fin : </td> <td> <input type="date" name="date_fin" value="<?php if(isset($resultat)) echo $resultat['date_fin'] ; ?>"></td></tr>
						<tr><td>Signature : </td> <td> <input type="text" name="signature" value="<?php if(isset($resultat)) echo $resultat['signature'] ; ?>"></td></tr>
						<tr><td>État : </td> <td> <input type="text" name="etat" value="<?php if(isset($resultat)) echo $resultat['etat'] ; ?>"></td></tr>
	
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="numc" value="<?php if(isset($resultat)) echo $resultat['numc'] ; ?>">
				</form>
</center>