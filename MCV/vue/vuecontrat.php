<center>
	<h2> Liste des contracts enregistres </h2>
	<br/>
	<table border = 1>
		<tr> <td>Numero contract</td><td>Date debut</td> <td>Date fin</td> <td>Signature</td>
			<td>Etat</td></tr>
		<?php
		foreach ($resultats as $unResultat) {
			echo "<tr>
			<td>".$unResultat['numc']."</td>
			<td>".$unResultat['date_debut']."</td>
			<td>".$unResultat['date_fin']."</td>
			<td>".$unResultat['signature']."</td>
			<td>".$unResultat['etat']."</td>
			</tr>";

		}
