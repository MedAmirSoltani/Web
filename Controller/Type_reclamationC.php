<?php
require_once '../assets/ASFO/utilis/config.php';
require_once '../Model/Type_reclamation.php';
Class Type_reclamationC {

    function afficherType_reclamation()
    {
        $requete = "select * from type_reclamation";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }
    function getType_reclamationbyID($id)
        {
            $requete = "select * from type_reclamation where Id_reclamation=:id";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id'=>$id
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

       function ajouterType_reclamation($type_reclamation)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO type_reclamation 
                (Id_reclamation,Type_reclamation)
                VALUES
                (:Id_reclamation,:Type_reclamation)
                ');
                $querry->execute([
                    'Id_reclamation'=>$type_reclamation->getId_reclamation(),
                    'Type_reclamation'=>$type_reclamation->getType_reclamation()
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierType_reclamation($type_reclamation)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE type_reclamation SET
                Type_reclamation=:Type_reclamation

                where Id_reclamation=:Id_reclamation
                ');
                $querry->execute([
                    'Id_reclamation'=>$type_reclamation->getId_reclamation(),
                    'Type_reclamation'=>$type_reclamation->getType_reclamation()
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerType_reclamation($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM type_reclamation WHERE Id_reclamation =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        public function afficherAbsences($Id_reclamation,$Id_etudiant){
            $config = config::getConnexion();
            try{
                $query = $config->prepare(
                    'SELECT * FROM absence where type_reclamation = :id AND Id_etudiant= :Id1' 
                );
                $query->execute([
                    'id' => $Id_reclamation,
                    'Id1'=>$Id_etudiant
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherNotes($Id_reclamation,$Id_etudiant){
            $config = config::getConnexion();
            try{
                $query = $config->prepare(
                    'SELECT * FROM rec_note where type_reclamation = :id AND Id_etudiant= :Id1'
                );
                $query->execute([
                    'id' => $Id_reclamation,
                    'Id1'=>$Id_etudiant
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherAutres($Id_reclamation,$Id_etudiant){
            $config = config::getConnexion();
            try{
                $query = $config->prepare(
                    'SELECT * FROM rec_autre where type_reclamation = :id AND Id_etudiant= :Id1'
                );
                $query->execute([
                    'id' => $Id_reclamation,
                    'Id1'=>$Id_etudiant
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
}
?>