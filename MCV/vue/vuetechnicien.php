<center>
	<h2> Liste des cours enregistres </h2>
	<br/>
	<table border = 1>
		<tr> <td>ID technicien</td><td>Nom</td> <td>Prenom</td> <td>mail</td></tr>
		<?php
		foreach ($resultats as $unResultat) {
			echo "<tr>
			<td>".$unResultat['idt']."</td>
			<td>".$unResultat['nomt']."</td>
			<td>".$unResultat['prenomt']."</td>
			<td>".$unResultat['mailt']."</td>
			</tr>";

		}
