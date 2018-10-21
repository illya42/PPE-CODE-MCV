<?php
	include("modele.php");

	class Controleur
	{
		private $unModele;

		public function __construct($serveur, $bdd, $user, $mdp)
		{
			$this->unModele = new Modele ($serveur, $bdd, $user, $mdp);
		}
		public function setTable ($uneTable)
		{
			$this->unModele->setTable($uneTable);
		}
		public function selectWhere ($champs, $where, $operateur)
		{
			return $this->unModele->selectWhere($champs, $where, $operateur);	
		}
	}
?>