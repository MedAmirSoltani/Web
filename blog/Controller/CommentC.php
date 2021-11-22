<?php
require_once "../assets/ASFO/utilis/Config.php";
require_once '../Model/Comment.php';
class CommentC
{



    function ShowComment($idp)
    {
        $requete = "select * from comment Where Idpost=:idp";
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

    function AddComment($Comment)
    {

        $config = config::getConnexion();
        try {

            $querry = $config->prepare('
            INSERT INTO comment 
            (Idpost,Comment_text,Idcomment,Date_Comment)
            VALUES
            (:Idpost,:Comment_text,:Idcomment,:Date_Comment)
            ');
            $querry->execute([
                'Idpost' => $Comment->getIdpost(),
                'Comment_text' => $Comment->getComment_text(),
                'Idcomment' => $Comment->getIdcomment(),
                'Date_Comment' => $Comment->getDate_Comment(),




            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function UpdateComment($Comment)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            UPDATE comment SET
            Title=:Title, Comment_text=:Comment_text,Idcomment=:Idcomment, Date_Comment=:Date_Comment

            where Idcomment=:Idcomment
            ');
            $querry->execute([
                'Idpost' => $Comment->getIdpost(),
                'Comment_text' => $Comment->getComment_text(),
                'Idcomment' => $Comment->getIdcomment(),
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
?>