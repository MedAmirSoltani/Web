<?php
    class Rec_note
    {
        private $Id_note;
        private $Module;
        private $Description;

        function __construct($id_note,$module, $description){
			$this->Id_note=$id_note;
			$this->Module=$module;
			$this->Description=$description;
		}

        function setId_absence(string $Id_note){
			$this->Id_note=$Id_note;
		}
        function setModule(string $Module){
			$this->Module=$Module;
		}
        function setDescription(string $Description){
			$this->Description=$Description;
		}

        function getId_note(){
			return $this->Id_note;
		}
        function getModule(){
			return $this->Module;
		}
        function getDescription(){
			return $this->Description;
		}
        
    }
    

?>