<?php
    class Absence
    {
        private $Module;
        private $Date_absence;
        private $Heure_absence;
        private $Description;

        function __construct($module, $date_absence, $heure_absence, $description){
			$this->Module=$module;
			$this->Date_absence=$date_absence;
			$this->Heure_absence=$heure_absence;
			$this->Description=$description;
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
    }
    

?>