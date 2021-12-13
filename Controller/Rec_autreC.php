<?php

    require_once '../assets/ASFO/utilis/config.php';
    require_once '../Model/Rec_autre.php';


    Class Rec_autreC {

        function afficherRec_autre()
        {
            $requete = "select * from rec_autre";
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
        function getRec_autrebyID($id)
        {
            $requete = "select * from rec_autre where Id_autre=:id";
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

        function ajouterRec_autre($rec_autre,$id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO rec_autre 
                (Description,type_reclamation)
                VALUES
                (:Description,:type_reclamation)
                ');
                $querry->execute([
                    'Description'=>$rec_autre->getDescription(),
                    'type_reclamation'=>$id
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierRec_autre($rec_autre)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE rec_autre SET
                Description=:Description

                where Id_autre=:Id_autre
                ');
                $querry->execute([
                    'Id_autre'=>$rec_autre->getId_autre(),
                    'Description'=>$rec_autre->getDescription()
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerRec_autre($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM rec_autre WHERE Id_autre =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }

?>