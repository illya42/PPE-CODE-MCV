<center>
	<h2> Liste des clients enregistres </h2>
	<br/>
	<table border = 1>
		<tr><td> id clients</td></tr>
	<?//	<tr><td>Type clients</td></tr> ?>
		<tr><td>Nom</td></tr>
      	<tr><td>Prenom</td></tr>
     	<tr><td> Mail</td></tr>
      	<tr><td>Adresse</td></tr>
     <?// 	<tr><td> Code postal</td></tr> ?>
      	<tr><td>Telephone</td></tr>
     <?// 	<tr><td>Date de naissance</td></tr> ?>
		
      	<?php
		foreach ($resultats as $unResultat) {
			echo "
			<tr><td>".$unResultat['IDC']."</td></tr>
			<tr><td>".$unResultat['CODE_TYPEC']."</td></tr>
			<tr><td>".$unResultat['NOMC']."</td></tr>
			<tr><td>".$unResultat['PRENOMC']."</td></tr>
			<tr><td>".$unResultat['MAIL']."</td></tr>
			<tr><td>".$unResultat['ADRESSEC']."</td></tr>
			<tr><td>".$unResultat['CPC']."</td></tr>
			<tr><td>".$unResultat['TELC']."</td></tr>
			<tr><td>".$unResultat['DATENAISSC']."</td></tr>
			";

		}
		
		?>
