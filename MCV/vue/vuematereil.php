<center>
	<h2> Liste des materiels enregistres </h2>
	<br/>
	<table border = 1>
		<tr> <td>Numero de série</td><td>Notice d'entretien</td></tr>
		<?php
		foreach ($resultats as $unResultat) {
			echo "<tr>
			<td>".$unResultat['num_serie']."</td>
			<td>".$unResultat['notice_entretien']."</td>
			</tr>";

		}
