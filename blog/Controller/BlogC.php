<?php
require_once "../assets/utilis/Config.php";
Class BlogC {

    function ShowBlog()
    {
        $requete = "select * from post";
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
    function GetPostbyID($idp)
    {
        $requete = "select * from post where Idpost=:idp";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'idp'=>$idp
                ]
            );
            $result = $querry->fetch();
            return $result ;
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }

    function AddBlog($Blog)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            INSERT INTO post 
            (Idpost,Title,Picture,Description,Date)
            VALUES
            (:Idpost,:Title,:Picture,:Description,:Date)
            ');
            $querry->execute([
                'Idpost'=>$Blog->getIdpost(),
                'Title'=>$Blog->getTitle(),
                'Picture'=>$Blog->getPicture(),
                'Date'=>$Blog->getDate(),
                'Description'=>$Blog->getDescription(),
                
                
                
            ]);
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }
    function modifierBlog($Blog)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            UPDATE post SET
             Date=:Date, Description=:Description, Picture=:Picture, Title=:Title

            where Idpost=:Idpost
            ');
            $querry->execute([
                'Idpost'=>$Blog->getIdpost(),
                'Title'=>$Blog->getTitle(),
                'Picture'=>$Blog->getPicture(),
                'Description'=>$Blog->getDescription(),
                'Date'=>$Blog->getDate(),
                
            ]);
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }

    function supprimerBlog($idp)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            DELETE FROM post WHERE Idpost =:idp
            ');
            $querry->execute([
                'idp'=>$idp
            ]);
            
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }
}


?>