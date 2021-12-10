<?php
    class cour
    {
        private $idcour;
        private $ncour;
		private $file;
		private $idmatiere;


        function __construct($idcour, $ncour,$file,$idmatiere){
			$this->idcour=$idcour;
			$this->ncour=$ncour;
			$this->file=$file;
			$this->idmatiere=$idmatiere;
		}

		function setidmatiere(string $idmatiere){
			$this->idmatiere=$idmatiere;
		}

        function setidcour(string $idcour){
			$this->idcour=$idcour;
		}
        function setncour(string $ncour){
			$this->ncour=$ncour;
		}
		function setfile(string $file){
			$this->file=$file;
		}

        function getidcour(){
			return $this->idcour;
		}
        function getncour(){
			return $this->ncour;
		}
		function getfile(){
			return $this->file;
		}
		function getidmatiere(){
			return $this->idmatiere;
		}
      

        
    }
    

?>