<?php
    class Type_reclamation
    {
        private $Id_reclamation;
        private $Type_reclamation;

        function __construct($id_reclamation, $type_reclamation){
			$this->Id_reclamation=$id_reclamation;
			$this->Type_reclamation=$type_reclamation;
		}

        function setId_reclamation(string $Id_reclamation){
			$this->Id_reclamation=$Id_reclamation;
		}
        function setType_reclamation(string $Type_reclamation){
			$this->Type_reclamation=$Type_reclamation;
		}
    
        function getId_reclamation(){
			return $this->Id_reclamation;
		}
        function getType_reclamation(){
			return $this->Type_reclamation;
		}
    }
    
?>