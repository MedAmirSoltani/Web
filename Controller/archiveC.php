<?php

require_once "../assets/ASFO/utilis/Config.php";
require_once '../Model/utilisateur.php';


class archiveC
{
    
    function afficherarchive()
    {
        $requete = "select * from archive ";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function getarchivebyID($ID_utilisateur)
    {
        $requete = "select * from archive where ID_utilisateur=:ID_utilisateur";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'ID_utilisateur' => $ID_utilisateur
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function ajouterarchive($utilisateur)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                INSERT INTO archive 
                (ID_utilisateur,email,password,name,first_name,date_of_birth,role,profilpicture)
                VALUES
                (:ID_utilisateur,:email,:password,:name,:first_name,:date_of_birth,:role,:profilpicture)
                ');
            $querry->execute([
                'ID_utilisateur' => $utilisateur->getID_utilisateur(),
                'email' => $utilisateur->getemail(),
                'password' => $utilisateur->getpassword(),
                'name' => $utilisateur->getname(),
                'first_name' => $utilisateur->getfirst_name(),
                'date_of_birth' => $utilisateur->getdate_of_birth(),
                'role' => $utilisateur->getrole(),
                'profilpicture' => $utilisateur->getprofilpicture(),
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    

    function supprimerarchive($ID_utilisateur)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                DELETE FROM archive WHERE ID_utilisateur =:ID_utilisateur
                ');
            $querry->execute([
                'ID_utilisateur' => $ID_utilisateur
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
}


?>