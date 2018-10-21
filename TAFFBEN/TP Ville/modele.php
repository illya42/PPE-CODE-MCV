<?php 
	//classe modele qui interagit avec la BDD lecture/écriture des données avec un connexion PDO.
	class Modele
	{
		private $pdo, $table;

		public function __construct ($serveur, $bdd, $user, $mdp)
		{
			try{
				$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);

			}catch(PDOException $exp){
				echo"Erreur de connexion à la BDD :".$serveur. "/".$bdd;
				$this->pdo = null;

			}
		}

		public function setTable ($uneTable)
		{
			$this->table = $uneTable;
		}
		
		public function insert ($tab)
		{
			if ($this->pdo == null) return null;
			else
			{
				$donnees = array();
				$champs = array();
				foreach ($tab as $cle => $valeur)
				{
					$champs[] = ":".$cle;
					$donnees[":".$cle] = $valeur;
				}
				$chaineChamps = implode(",",$champs);
				$requete = "insert into ".$this->table. " values (null,".$chaineChamps.");";
				$insert= $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}
	}

?>