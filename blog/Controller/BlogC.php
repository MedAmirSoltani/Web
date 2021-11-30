<?php
require_once "../assets/ASFO/utilis/Config.php";
require_once '../Model/Blog.php';
class BlogC
{



    function ShowBlogHome()
    {
        $requete = "select * from post order by IdPost desc";
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
    function ShowBlogHomeByTitle($search)
    {
        $requete = 'select * from post where Title like "%' . $search . '%"';
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

    function GetPostbyID($idp)
    {
        $requete = "select * from post where Idpost=:idp";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'idp' => $idp
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function AddBlog($Blog)
    {

        $config = config::getConnexion();
        try {
            // $this->uploadFile();
            $querry = $config->prepare('
            INSERT INTO post 
            (Title,Picture,Description,Date)
            VALUES
            (:Title,:Picture,:Description,:Date)
            ');
            $querry->execute([

                'Title' => $Blog->getTitle(),
                'Picture' => $Blog->getPicture(),
                'Date' => $Blog->getDate(),
                'Description' => $Blog->getDescription(),



            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function UpdateBlog($Blog, $idp)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            UPDATE post SET
            Title=:Title, Picture=:Picture,Date=:Date, Description=:Description

            where Idpost=:Idpost
            ');
            $querry->execute([
                "Idpost" => $idp,
                'Title' => $Blog->getTitle(),
                'Picture' => $Blog->getPicture(),
                'Date' => $Blog->getDate(),
                'Description' => $Blog->getDescription(),

            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function RemoveBlog($idp)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            DELETE FROM post WHERE Idpost =:idp
            ');
            $querry->execute([
                'idp' => $idp
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
        header("Refresh:0");
    }

    function ShowBlogArchiveHome()
    {
        $requete = "select * from Archivepost ";
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
    function ShowBlogHomeArchiveByTitle($search)
    {
        $requete = 'select * from Archivepost where Title like "%' . $search . '%"';
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

    function GetPostArchivebyID($idp)
    {
        $requete = "select * from Archivepost where Idpost=:idp";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'idp' => $idp
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function AddBlogArchive($Blog)
    {

        $config = config::getConnexion();
        try {
            
            $querry = $config->prepare('
            INSERT INTO Archivepost 
            (Title,Picture,Description,Date)
            VALUES
            (:Title,:Picture,:Description,:Date)
            ');
            $querry->execute([

                'Title' => $Blog->getTitle(),
                'Picture' => $Blog->getPicture(),
                'Date' => $Blog->getDate(),
                'Description' => $Blog->getDescription(),



            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
}
