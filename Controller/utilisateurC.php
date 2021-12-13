<?php

require_once "../assets/ASFO/utilis/Config.php";
require_once '../Model/utilisateur.php';


class utilisateurC
{
    function connexionUser($email, $password)
    {
        $sql = 'select * from utilisateur where email=:Email and password=:Password';
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'Email' => $email,
                'Password' => $password
            ]);
            $count = $query->rowCount();
            if ($count == 0) {
                $message = "email or password uncorrect";
            } else {
                $x = $query->fetch();
                $message = $x['role'];
            }
        } catch (Exception $e) {
            $message = " " . $e->getMessage();
        }
        return $message;
    }

    public function afficherbyname($namerecherche)
    {
        try {
            $db = config::getConnexion();

            $querry = $db->prepare('select * from utilisateur where name like "%'.$namerecherche.'%"');
            $querry->execute();
            $result = $querry->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }


    function phpAlert($msg)
    {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }


    function getutilisateurbyemail($Email)
    {
        $requete = "select * from utilisateur where email=:Email";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'Email' => $Email
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function getprofbyemail($Email)
    {
        $requete = "select * from prof where email=:Email";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'Email' => $Email
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function getetudiantbyemail($Email)
    {
        $requete = "select * from etudiant where email=:Email";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'Email' => $Email
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function afficherutilisateur()
    {
        $requete = "select * from utilisateur ";
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
    function getutilisateurbyID($ID_utilisateur)
    {
        $requete = "select * from utilisateur where ID_utilisateur=:ID_utilisateur";
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

    function ajouterutilisateur($utilisateur)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                INSERT INTO utilisateur 
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
    function modifierutilisateur($utilisateur)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                UPDATE utilisateur SET
                email=:email,password=:password,name=:name,first_name=:first_name,date_of_birth=:date_of_birth,role=:role,profilpicture=:profilpicture 
                where ID_utilisateur=:ID_utilisateur
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

    function supprimerutilisateur($ID_utilisateur)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                DELETE FROM utilisateur WHERE ID_utilisateur =:ID_utilisateur
                ');
            $querry->execute([
                'ID_utilisateur' => $ID_utilisateur
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
}





class etudiantC extends utilisateurC
{

    function afficheretudiant()
    {
        $requete = "select * from etudiant";
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
    function getetudiantbyID($ID)
    {
        $requete = "select * from etudiant where ID=:ID";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'ID' => $ID
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function getetudiantbyName($name)
    {
        $requete = "select * from etudiant where name=:name";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'name' => $name
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }


    function ajouteretudiant($etudiant)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                INSERT INTO etudiant 
                (ID,email,password,name,first_name,date_of_birth,role,profilpicture,classe)
                VALUES
                (:ID,:email,:password,:name,:first_name,:date_of_birth,:role,:profilpicture,:classe)
                ');
            $querry->execute([
                'ID' => $etudiant->getID(),
                'email' => $etudiant->getemail(),
                'password' => $etudiant->getpassword(),
                'name' => $etudiant->getname(),
                'first_name' => $etudiant->getfirst_name(),
                'date_of_birth' => $etudiant->getdate_of_birth(),
                'role' => $etudiant->getrole(),
                'profilpicture' => $etudiant->getprofilpicture(),
                'classe' => $etudiant->getclasse(),
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function modifieretudiant($etudiant)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                UPDATE etudiant SET
                email=:email,password=:password,name=:name,first_name=:first_name,date_of_birth=:date_of_birth,role=:role,profilpicture=:profilpicture,classe=:classe 
                where ID=:ID
                ');
            $querry->execute([
                'ID' => $etudiant->getID(),
                'email' => $etudiant->getemail(),
                'password' => $etudiant->getpassword(),
                'name' => $etudiant->getname(),
                'first_name' => $etudiant->getfirst_name(),
                'date_of_birth' => $etudiant->getdate_of_birth(),
                'role' => $etudiant->getrole(),
                'profilpicture' => $etudiant->getprofilpicture(),
                'classe' => $etudiant->getclasse(),
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function supprimeretudiant($ID)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                DELETE FROM etudiant WHERE ID =:ID
                ');
            $querry->execute([
                'ID' => $ID
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
}












class profC extends utilisateurC
{

    function afficherprof()
    {
        $requete = "select * from prof";
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
    function getprofbyID($ID_prof)
    {
        $requete = "select * from prof where ID_prof=:ID_prof";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'ID_prof' => $ID_prof
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function ajouterprof($prof)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                    INSERT INTO prof 
                    (ID_prof,email,password,name,first_name,date_of_birth,role,profilpicture,idmatiere)
                    VALUES
                    (:ID_prof,:email,:password,:name,:first_name,:date_of_birth,:role,:profilpicture,:idmatiere)
                    ');
            $querry->execute([
                'ID_prof' => $prof->getID_prof(),
                'email' => $prof->getemail(),
                'password' => $prof->getpassword(),
                'name' => $prof->getname(),
                'first_name' => $prof->getfirst_name(),
                'date_of_birth' => $prof->getdate_of_birth(),
                'role' => $prof->getrole(),
                'profilpicture' => $prof->getprofilpicture(),
                'idmatiere' => $prof->getidmatiere(),
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function modifierprof($prof)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                    UPDATE prof SET
                    email=:email,password=:password,name=:name,first_name=:first_name,date_of_birth=:date_of_birth,role=:role,profilpicture=:profilpicture,idmatiere=:idmatiere 
                    where ID_prof=:ID_prof
                    ');
            $querry->execute([
                'ID_prof' => $prof->getID_prof(),
                'email' => $prof->getemail(),
                'password' => $prof->getpassword(),
                'name' => $prof->getname(),
                'first_name' => $prof->getfirst_name(),
                'date_of_birth' => $prof->getdate_of_birth(),
                'role' => $prof->getrole(),
                'profilpicture' => $prof->getprofilpicture(),
                'idmatiere' => $prof->getidmatiere(),
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function supprimerprof($ID_prof)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                    DELETE FROM prof WHERE ID_prof =:ID_prof
                    ');
            $querry->execute([
                'ID_prof' => $ID_prof
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
}
