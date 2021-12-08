<?php
    class Absence
    {
        private $Id_absence;
        private $Module;
        private $Date_absence;
        private $Heure_absence;
        private $Description;
		private $type_reclamation;

        function __construct($id_absence,$module, $date_absence, $heure_absence, $description,$type_reclamation){
			$this->Id_absence=$id_absence;
			$this->Module=$module;
			$this->Date_absence=$date_absence;
			$this->Heure_absence=$heure_absence;
			$this->Description=$description;
			$this->type_reclamation=$type_reclamation;
		}

        function setId_absence(string $Id_absence){
			$this->Id_absence=$Id_absence;
		}
        function setModule(string $Module){
			$this->Module=$Module;
		}
        function setDate_absence(string $Date_absence){
			$this->Date_absence=$Date_absence;
		}
        function setHeure_absence(string $Heure_absence){
			$this->Heure_absence=$Heure_absence;
		}
        function setDescription(string $Description){
			$this->Description=$Description;
		}
		function settype_reclamation(string $type_reclamation){
			$this->type_reclamation=$type_reclamation;
		}

        function getId_absence(){
			return $this->Id_absence;
		}
        function getModule(){
			return $this->Module;
		}
        function getDate_absence(){
			return $this->Date_absence;
		}
        function getHeure_absence(){
			return $this->Heure_absence;
		}
        function getDescription(){
			return $this->Description;
		}
		function gettype_reclamation(){
			return $this->type_reclamation;
		}
    }
    

?>