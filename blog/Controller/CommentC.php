<?php
require_once "../assets/ASFO/utilis/Config.php";
require_once '../Model/Comment.php';
class CommentC
{
 
    function ShowComments()
    {
        $requete = "select * from comment order by Idpost DESC";
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


    function ShowComment($idp)
    {
        $requete = "select * from comment Where Idpost=:idp order by Idcomment DESC";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(['idp' => $idp]);
            $result = $querry->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function GetCommentbyID($idc)
    {
        $requete = "select * from comment where Idcomment=:idc";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'idc' => $idc
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function AddComment($Comment, $idp)
    {

        $config = config::getConnexion();
        try {

            $querry = $config->prepare('
            INSERT INTO comment 
            (Idpost,Comment_text,Date_Comment)
            VALUES
            (:Idpost,:Comment_text,:Date_Comment)
            ');
            $querry->execute([
                'Idpost' => $idp,
                'Comment_text' => $Comment->getComment_text(),
                'Date_Comment' => $Comment->getDate_Comment(),




            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function UpdateComment($Comment, $idc)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            UPDATE comment SET
            Comment_text=:Comment_text,Date_Comment=:Date_Comment

            where Idcomment=:Idcomment
            ');
            $querry->execute([

                'Idcomment' => $idc,
                'Comment_text' => $Comment->getComment_text(),
                'Date_Comment' => $Comment->getDate_Comment(),


            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function RemoveComment($idc)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            DELETE FROM comment WHERE Idcomment =:idc
            ');
            $querry->execute([
                'idc' => $idc
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
        header("Refresh:0");
    }
}

function AddComment($Comment, $idp)
    {

        $config = config::getConnexion();
        try {

            $querry = $config->prepare('
            INSERT INTO comment 
            (Idpost,Comment_text,Date_Comment)
            VALUES
            (:Idpost,:Comment_text,:Date_Comment)
            ');
            $querry->execute([
                'Idpost' => $idp,
                'Comment_text' => $Comment->getComment_text(),
                'Date_Comment' => $Comment->getDate_Comment(),




            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

?>