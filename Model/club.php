<?php
    class club
    {
        private $idclub;
        private $nomclub;
		private $logo;



        function __construct($idclub, $nomclub, $logo){
			$this->idclub=$idclub;
			$this->nomclub=$nomclub;
			$this->logo=$logo;
	
			
		}

        function setidclub(string $idclub){
			$this->idclub=$idclub;
		}
        function setnomclub(string $nomclub){
			$this->nomclub=$nomclub;
		}
		function setlogo(string $logo){
			$this->logo=$logo;
		}

        function getidclub(){
			return $this->idclub;
		}
        function getnomclub(){
			return $this->nomclub;
		}
		function getlogo(){
			return $this->logo;
		}

		

        
    }
    

?>