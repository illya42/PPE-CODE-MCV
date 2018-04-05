<left>
	<h2> Liste des techniciens </h2>
	<br/>
	<table border = 1>
		<tr><td>ID technicien</td>
			<td>Nom</td>
			<td>Prenom</td>
			<td>Mail</td>
			<td>Actions</td>
		</tr>
		<?php
		foreach ($resultats as $unResultat) {
			echo "<tr>
			<td>".$unResultat['IDT']."</td>
			<td>".$unResultat['NOMT']."</td>
			<td>".$unResultat['PRENOMT']."</td>
			<td>".$unResultat['MAILT']."</td>
			
			<td> 	<a href='index.php?page=2&action=X&IDT=".$unResultat['IDT']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=2&action=E&IDT=".$unResultat['IDT']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
		}
		?>
		</table>
		<br/>
			<h2>Ajout d'un technicien</h2>
				<form method="post" action="">

					<table border= 7>
						<tr><td>ID Technicien : </td> <td> <input type="text" name="IDT" value="<?php if(isset($resultat)) echo $resultat['IDT'] ; ?>"></td></tr>
						<tr><td>Nom : </td> <td> <input type="text" name="NOMT" value="<?php if(isset($resultat)) echo $resultat['NOMT'] ; ?>"></td></tr>
						<tr><td>Prénom : </td> <td> <input type="text" name="PRENOMT" value="<?php if(isset($resultat)) echo $resultat['PRENOMT'] ; ?>"></td></tr>
						<tr><td>Mail : </td> <td> <input type="text" name="MAILT" value="<?php if(isset($resultat)) echo $resultat['MAILT'] ; ?>"></td></tr>

							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="IDT" value="<?php if(isset($resultat)) echo $resultat['IDT'] ; ?>">
				</form>
</left>
