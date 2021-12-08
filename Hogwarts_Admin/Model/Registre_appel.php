<?php
    class Registre_appel
    {
        private $IdRegistre;
		private $Etudiant;
		private $Date;
		private $Heure;
        private $Etat;

        function __construct($idRegistre,$etudiant,$date,$heure,$etat){
			$this->IdRegistre=$idRegistre;
			$this->Etudiant=$eudiant;
			$this->Date=$date;
			$this->Heure=$heure;
			$this->Etat=$etat;
		}

        function setIdRegistre(string $IdRegistre){
			$this->IdRegistre=$IdRegistre;
		}
		function setEtudiant(string $Etudiant){
			$this->Etudiant=$Etudiant;
		}
		function setDate(string $Date){
			$this->Date=$Date;
		}
		function setHeure(string $Heure){
			$this->Heure=$Heure;
		}
        function setEtat(string $Etat){
			$this->Etat=$Etat;
		}
        
        function getIdRegistre(){
			return $this->IdRegistre;
		}
		function getEtudiant(){
			return $this->Etudiant;
		}
		function getDate(){
			return $this->Date;
		}
		function getHeure(){
			return $this->Heure;
		}
        function getEtat(){
			return $this->Etat;
		}
        
    }
    

?>