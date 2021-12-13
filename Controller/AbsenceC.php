<?php

    require_once '../assets/ASFO/utilis/config.php';
    require_once '../Model/Absence.php';


    Class AbsenceC {

        function afficherAbsence()
        {
            $requete = "select * from absence";
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
        function getAbsencebyID($id)
        {
            $requete = "select * from absence where Id_absence=:id";
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

        function ajouterAbsence($absence,$id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO absence 
                (Module,Date_absence,Heure_absence,Description,type_reclamation)
                VALUES
                (:Module,:Date_absence,:Heure_absence,:Description,:type_reclamation)
                ');
                $querry->execute([
                    'Module'=>$absence->getModule(),
                    'Date_absence'=>$absence->getDate_absence(),
                    'Heure_absence'=>$absence->getHeure_absence(),
                    'Description'=>$absence->getDescription(),
                    'type_reclamation'=>$id
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierAbsence($absence)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE absence SET
                Module=:Module,
                Date_absence=:Date_absence,
                Heure_absence=:Heure_absence,
                Description=:Description

                where Id_absence=:Id_absence
                ');
                $querry->execute([
                    'Id_absence'=>$absence->getId_absence(),
                    'Module'=>$absence->getModule(),
                    'Date_absence'=>$absence->getDate_absence(),
                    'Heure_absence'=>$absence->getHeure_absence(),
                    'Description'=>$absence->getDescription(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerAbsence($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM absence WHERE Id_absence =:id
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