<?php
    class note
    {
		private $idnote;
        private $nom;
		private $prenom;
		private $notes;
		private $idmatiere;

        function __construct($idnote, $nom, $prenom, $notes,$idmatiere){
			$this->idnote=$idnote;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->notes=$notes;
			$this->idmatiere=$idmatiere;
		}
		function setidmatiere(string $idmatiere){
			$this->idmatiere=$idmatiere;
		}
        function setidnote(string $idnote){
			$this->idnote=$idnote;
		}

        function setnom(string $nom){
			$this->nom=$nom;
		}

		function setprenom(string $prenom){
			$this->prenom=$prenom;
		}

        function setnotes(string $notes){
			$this->notes=$notes;
		}



       
		function getidnote(){
			return $this->idnote;
		}
        function getnom(){
			return $this->nom;
		}

		function getprenom(){
			return $this->prenom;
		}

		function getnotes(){
			return $this->notes;
		}
		function getidmatiere(){
			return $this->idmatiere;
		}
      
        
    }
    

?>