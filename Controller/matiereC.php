<?php

    require_once '../Assets/Utils/config.php';
    require_once '../Model/matiere.php';


    Class matiereC {

        function affichermatiere()
        {
            $requete = "select * from matiere";
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
            $requete = "select * from matiere where idmatiere=:idmatiere";
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

        function ajoutermatiere($matiere)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO matiere 
                (idmatiere,titre)
                VALUES
                (:idmatiere,:titre)
                ');
                $querry->execute([
                    'idmatiere'=>$matiere->getidmatiere(),
                    'titre'=>$matiere->gettitre(),
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
                UPDATE matiere SET
                titre=:titre 
                where idmatiere=:idmatiere
                ');
                $querry->execute([
                    'idmatiere'=>$matiere->getidmatiere(),
                    'titre'=>$matiere->gettitre(),

                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimermatiere($idmatiere)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM matiere WHERE idmatiere =:idmatiere
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