<?php
    class Rec_note
    {
        private $Module;
        private $Description;

        function __construct($module, $description){
			$this->Module=$module;
			$this->Description=$description;
		}

        function setModule(string $Module){
			$this->Module=$Module;
		}
        function setDescription(string $Description){
			$this->Description=$Description;
		}

        function getModule(){
			return $this->Module;
		}
        function getDescription(){
			return $this->Description;
		}
        
    }
    

?>