<?php

    require_once '../Assets/Utils/config.php';
    require_once '../Model/matiere.php';


    Class archiveC {

        function afficherarchivematiere()
        {
            $requete = "select * from archivematiere ";
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
        function getmatierebyID($idmatiere)
        {
            $requete = "select * from archivematiere where idmatiere=:idmatiere";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idmatiere'=>$idmatiere
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouterarchive($matiere)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO archivematiere 
                (idmatiere,titre,coff,hour)
                VALUES
                (:idmatiere,:titre,:coff,:hour)
                ');
                $querry->execute([
                    'idmatiere'=>$matiere->getidmatiere(),
                    'titre'=>$matiere->gettitre(),
                    'coff'=>$matiere->getcoff(),
                    'hour'=>$matiere->gethour(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifiermatiere($matiere)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE archivematiere SET
                titre=:titre ,
                coff=:coff ,
                hour=:hour
                where idmatiere=:idmatiere
                ');
                $querry->execute([
                    'idmatiere'=>$matiere->getidmatiere(),
                    'titre'=>$matiere->gettitre(),
                    'coff'=>$matiere->getcoff(),
                    'hour'=>$matiere->gethour(),

                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerarchive($idmatiere)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM archivematiere WHERE idmatiere =:idmatiere
                ');
                $querry->execute([
                    'idmatiere'=>$idmatiere
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }

?>