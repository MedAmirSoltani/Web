<?php
    class Registre_appel
    {
		private $Etudiant;
		private $Module;
		private $Date;
		private $Heure;
        private $Etat;

        function __construct($etudiant,$module,$date,$heure,$etat){
			$this->Etudiant=$etudiant;
			$this->Module=$module;
			$this->Date=$date;
			$this->Heure=$heure;
			$this->Etat=$etat;
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
		 function setModule(string $Module){
			$this->Module=$Module;
		}
        
		function getModule(){
			return $this->Module;
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