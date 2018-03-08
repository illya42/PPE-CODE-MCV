<center>
	<h2> Liste des contracts enregistres </h2>
	<br/>
	<table border = 1>
		<tr> <td>Numero cours</td><td>Nom Candidats</td> <td>Prenom Candidats</td> <td>Nom Moniteur</td>
			<td>Prenom Moniteur</td> <td>Date cours</td> <td>Heure debut</td> <td>heure fin</td></tr>
		<?php
		foreach ($resultats as $unResultat) {
			echo "<tr>
			<td>".$unResultat['idcours']."</td>
			<td>".$unResultat['nomcandidat']."</td>
			<td>".$unResultat['prenomcandidat']."</td>
			<td>".$unResultat['nommoniteur']."</td>
			<td>".$unResultat['prenommoniteur']."</td>
			<td>".$unResultat['datecours']."</td>
			<td>".$unResultat['heuredebut']."</td>
			<td>".$unResultat['heurefin']."</td>
			</tr>";

		}
