<?php
    class event
    {
        private $idevent;
        private $nomevent;
		private $date;
		private $idclub;



        function __construct($idevent, $nomevent, $date,$idclub){
			$this->idevent=$idevent;
			$this->nomevent=$nomevent;
			$this->date=$date;
			$this->idclub=$idclub;
			
		}

        function setidevent(string $idevent){
			$this->idevent=$idevent;
		}
        function setnomevent(string $nomevent){
			$this->nomevent=$nomevent;
		}
		function setdate(string $date){
			$this->date=$date;
		}
		function setidclub(string $idclub){
			$this->idclub=$idclub;
		}

        function getidevent(){
			return $this->idevent;
		}
        function getnomevent(){
			return $this->nomevent;
		}
		function getdate(){
			return $this->date;
		}

		function getidclub(){
			return $this->idclub;
		}

		

        
    }
    

?>