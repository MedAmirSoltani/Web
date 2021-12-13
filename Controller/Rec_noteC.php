<?php

    require_once '../assets/ASFO/utilis/config.php';
    require_once '../Model/Rec_note.php';

    Class Rec_noteC {

        function afficherRec_note()
        {
            $requete = "select * from rec_note";
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
        function getRec_notebyID($id)
        {
            $requete = "select * from rec_note where Id_note=:id";
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

        function ajouterRec_note($rec_note,$id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO rec_note 
                (Module,Description,type_reclamation)
                VALUES
                (:Module,:Description,:type_reclamation)
                ');
                $querry->execute([
                    'Module'=>$rec_note->getModule(),
                    'Description'=>$rec_note->getDescription(),
                    'type_reclamation'=>$id
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierRec_note($rec_note)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE rec_note SET
                Module=:Module,
                Description=:Description

                where Id_note=:Id_note
                ');
                $querry->execute([
                    'Id_note'=>$rec_note->getId_note(),
                    'Module'=>$rec_note->getModule(),
                    'Description'=>$rec_note->getDescription(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerRec_note($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM rec_note WHERE Id_note =:id
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