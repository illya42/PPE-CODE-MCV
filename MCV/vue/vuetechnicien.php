<center>
	<h2> Liste des techniciens </h2>
	<br/>
	<table border = 1>
		<tr><td>ID technicien</td>
			<td>Nom</td>
			<td>Prenom</td>
			<td>mail</td></tr>
		<?php
		foreach ($resultats as $unResultat) {
			echo "<tr>
			<td>".$unResultat['idt']."</td>
			<td>".$unResultat['nomt']."</td>
			<td>".$unResultat['prenomt']."</td>
			<td>".$unResultat['mailt']."</td>
			</tr>
			<td> 	<a href='index.php?page=2&action=X&idc=".$unResultat['idc']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=2&action=E&idc=".$unResultat['idc']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
		}
		?>
		</table>
		<br/>
			<h2>Ajout d'un technicien</h2>
				<form method="post" action="">

					<table border= 7>
						<tr><td>Nom : </td> <td> <input type="text" name="nom" value="<?php if(isset($resultat)) echo $resultat['nomc'] ; ?>"></td></tr>
						<tr><td>Prénom : </td> <td> <input type="text" name="prenom" value="<?php if(isset($resultat)) echo $resultat['prenomc'] ; ?>"></td></tr>
						<tr><td>Mail : </td> <td> <input type="text" name="mail" value="<?php if(isset($resultat)) echo $resultat['mail'] ; ?>"></td></tr>

							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="idt" value="<?php if(isset($resultat)) echo $resultat['idt'] ; ?>">
				</form>
</center>
