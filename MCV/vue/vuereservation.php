<center>
	<h2> Liste des reservations enregistres </h2>
	<br/>
	<table border = 1>
		<tr> <td>Numero reservation</td><td>Etat</td> <td>Date</td></tr>
		<?php
		foreach ($resultats as $unResultat) {
			echo "<tr>
			<td>".$unResultat['numr']."</td>
			<td>".$unResultat['etat']."</td>
			<td>".$unResultat['dater']."</td>
			</tr>";

		}
