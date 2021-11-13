<?php
    class matiere
    {
        private $idmatiere;
        private $titre;


        function __construct($idmatiere, $titre){
			$this->idmatiere=$idmatiere;
			$this->titre=$titre;
		}

        function setidmatiere(string $idmatiere){
			$this->idmatiere=$idmatiere;
		}
        function settitre(string $titre){
			$this->titre=$titre;
		}

        function getidmatiere(){
			return $this->idmatiere;
		}
        function gettitre(){
			return $this->titre;
		}
      

        
    }
    

?>