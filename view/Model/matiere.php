<?php
    class matiere
    {
        private $idmatiere;
        private $titre;
		private $coff;
		private $hour;


        function __construct($idmatiere, $titre,$hour,$coff){
			$this->idmatiere=$idmatiere;
			$this->titre=$titre;
			$this->hour=$hour;
			$this->coff=$coff;
		}

        function setidmatiere(string $idmatiere){
			$this->idmatiere=$idmatiere;
		}
        function settitre(string $titre){
			$this->titre=$titre;
		}
		function setcoff(string $coff){
			$this->coff=$coff;
		}
		function sethour(string $hour){
			$this->hour=$hour;
		}

        function getidmatiere(){
			return $this->idmatiere;
		}
        function gettitre(){
			return $this->titre;
		}
		function getcoff(){
			return $this->coff;
		}
		function gethour(){
			return $this->hour;
		}
      

        
    }
    

?>