<?php
    class Rec_autre
    {
        private $Description;

        function __construct($description){
			$this->Description=$description;
		}


        function setDescription(string $Description){
			$this->Description=$Description;
		}

        
        function getDescription(){
			return $this->Description;
		}
        
    }
    

?>