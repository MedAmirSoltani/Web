<?php
    class Rec_autre
    {
        private $Id_autre;
        private $Description;

        function __construct($id_autre, $description){
			$this->Id_autre=$id_autre;
			$this->Description=$description;
		}

        function setId_autre(string $Id_autre){
			$this->Id_autre=$Id_autre;
		}

        function setDescription(string $Description){
			$this->Description=$Description;
		}

        function getId_autre(){
			return $this->Id_autre;
		}
        
        function getDescription(){
			return $this->Description;
		}
        
    }
    

?>