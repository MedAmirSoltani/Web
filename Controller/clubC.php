<?php

require_once "../assets/ASFO/utilis/Config.php";
    require_once '../Model/club.php';


    Class clubC {

        function afficherclub()
        {
            $requete = "select * from club";
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
        function getclubbyID($idclub)
        {
            $requete = "select * from club where idclub=:idclub";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idclub'=>$idclub
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouterclub($club)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO club
                (idclub,nomclub,logo)
                VALUES
                (:idclub,:nomclub,:logo)
                ');
                $querry->execute([
                    'idclub'=>$club->getidclub(),
                    'nomclub'=>$club->getnomclub(),
                    'logo'=>$club->getlogo(),
                
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierclub($club)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE club SET
                nomclub=:nomclub,
               logo=:logo
              
                where idclub=:idclub
                ');
                $querry->execute([
                    'idclub'=>$club->getidclub(),
                    'nomclub'=>$club->getnomclub(),
                    'logo'=>$club->getlogo(),
              

                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerclub($idclub)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM club WHERE idclub =:idclub
                ');
                $querry->execute([
                    'idclub'=>$idclub
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }

?>