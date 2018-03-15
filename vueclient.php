<center>
	<h2> Liste des clients enregistres </h2>
	<br/>
	<table border = 1>
		<tr><td>ID clients</td></tr>
		<tr><td>Type clients</td></tr>
		<tr><td>Nom</td></tr>
      	<tr><td>Prenom</td></tr>
     	<tr><td>Mail</td></tr>
      	<tr><td>Adresse</td></tr>
      	<tr><td>Code postal</td></tr>
      	<tr><td>Telephone</td></tr>
     	<tr><td>Date de naissance</td></tr>
		
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
			
			<td> 	<a href='index.php?page=6&action=X&idc=".$unResultat['idc']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=6&action=E&idc=".$unResultat['idc']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
		}
		?>
		</table>
		<br/>
			<h2>Ajout d'un Client</h2>
				<form method="post" action="">

					<table border= 7 >
						<tr><td>Nom : </td> <td> <input type="text" name="nom" value="<?php if(isset($resultat)) echo $resultat['nomc'] ; ?>"></td></tr>
						<tr><td>Prénom : </td> <td> <input type="text" name="prenom" value="<?php if(isset($resultat)) echo $resultat['prenomc'] ; ?>"></td></tr>
						<tr><td>Mail : </td> <td> <input type="text" name="mail" value="<?php if(isset($resultat)) echo $resultat['mail'] ; ?>"></td></tr>
						<tr><td>Adresse : </td> <td> <input type="text" name="adresse" value="<?php if(isset($resultat)) echo $resultat['adressec'] ; ?>"></td></tr>
						<tr><td>Code postal : </td> <td> <input type="int" name="cpc" value="<?php if(isset($resultat)) echo $resultat['cpc'] ; ?>"></td></tr>
						<tr><td>Téléphone : </td> <td> <input type="int" name="telc" value="<?php if(isset($resultat)) echo $resultat['telc'] ; ?>"></td></tr>
						<tr><td>Date de naissance : </td> <td> <input type="date" name="datenaissc" value="<?php if(isset($resultat)) echo $resultat['message'] ; ?>"></td></tr>
						<tr>
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="idc" value="<?php if(isset($resultat)) echo $resultat['idc'] ; ?>">
				</form>
</center>