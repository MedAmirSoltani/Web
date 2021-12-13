<?php

    require_once '../assets/ASFO/utilis/config.php';
    require_once '../Model/Registre_appel.php';


    Class Registre_appelC {

        function afficherRegistre_appel()
        {
            $requete = "select * from registre_appel";
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
        function getRegistre_appelbyID($id)
        {
            $requete = "select * from registre_appel where IdRegistre=:id";
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

        function ajouterRegistre_appel($registre_appel)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO registre_appel 
                (IdRegistre,Etudiant,Date,Heure,Etat)
                VALUES
                (:IdRegistre,:Etudiant,:Date,:Heure,:Etat)
                ');
                $querry->execute([
                    'IdRegistre'=>$registre_appel->getIdRegistre(),
                    'Etudiant'=>$registre_appel->getEtudiant(),
                    'Date'=>$registre_appel->getDate(),
                    'Heure'=>$registre_appel->getHeure(),
                    'Etat'=>$registre_appel->getEtat()
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierRegistre_appel($registre_appel)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE registre_appel SET
                Etudiant=:Etudiant,
                Date=:Date,
                Heure=:Heure,
                Etat=:Etat
                where IdRegistre=:IdRegistre
                ');
                $querry->execute([
                    'IdRegistre'=>$registre_appel->getIdRegistre(),
                    'Etudiant'=>$registre_appel->getEtudiant(),
                    'Date'=>$registre_appel->getDate(),
                    'Heure'=>$registre_appel->getHeure(),
                    'Etat'=>$registre_appel->getEtat(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerRegistre_appel($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM registre_appel WHERE IdRegistre =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        public function afficherPresences($Id_etudiant){
            $config = config::getConnexion();
            try{
                $query = $config->prepare(
                    'SELECT * FROM registre_appel where Id_etudiant= :Id1' 
                );
                $query->execute([
                    'Id1'=>$Id_etudiant
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
    }

?>