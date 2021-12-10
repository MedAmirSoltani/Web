<?php
require_once "../assets/ASFO/utilis/Config.php";
require_once '../Model/Reply.php';

class ReplyC
{

    function ShowReplys()
    {
        $requete = "select * from reply order by Idcomment DESC";
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


    function ShowReply($idc)
    {
        $requete = "select * from reply Where Idcomment=:idc order by Idreply ASC";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(['idc' => $idc]);
            $result = $querry->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function GetReplybyID($idr)
    {
        $requete = "select * from reply where Idreply=:idr";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'idr' => $idr
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function AddReply($Reply)
    {

        $config = config::getConnexion();
        try {

            $querry = $config->prepare('
            INSERT INTO reply 
            (Idcomment,Reply_text,Date_Reply)
            VALUES
            (:Idcomment,:Reply_text,:Date_Reply)
            ');
            $querry->execute([
                'Idcomment' => $Reply->getIdcomment(),
                'Reply_text' => $Reply->getReply_text(),
                'Date_Reply' => $Reply->getDate_Reply(),




            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function UpdateReply($Reply, $idc)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            UPDATE reply SET
            Reply_text=:Reply_text,Date_Reply=:Date_Reply

            where Idreply=:Idreply
            ');
            $querry->execute([

                'Idreply' => $idc,
                'Reply_text' => $Reply->getReply_text(),
                'Date_Reply' => $Reply->getDate_Reply(),


            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function RemoveReply($idr)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            DELETE FROM reply WHERE Idreply =:idr
            ');
            $querry->execute([
                'idr' => $idr
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
        header("Refresh:0");
    }

    function AddReplyArchive($Reply, $idcr, $idr)
    {

        $config = config::getConnexion();
        try {

            $querry = $config->prepare('
            INSERT INTO archivereply 
            (Idcommentar,Reply_text,Date_Reply,Idreply)
            VALUES
            (:Idcommentar,:Reply_text,:Date_Reply,:Idreply)
            ');
            $querry->execute([
                'Idreply' => $idr,
                'Idcommentar' => $idcr,
                'Reply_text' => $Reply->getReply_text(),
                'Date_Reply' => $Reply->getDate_Reply(),

            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function ShowReplyArchive($idc)
    {
        $requete = "select * from archivereply Where Idcommentar=:idc order by Idreply ASC";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(['idc' => $idc]);
            $result = $querry->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function ShowReplysArchive()
    {
        $requete = "select * from archivereply order by Idreply ASC";
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

    function RemoveReplyArchive($idr)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            DELETE FROM archivereply WHERE Idreply =:idr
            ');
            $querry->execute([
                'idr' => $idr
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
        header("Refresh:0");
    }
    function RestoreReply($Reply, $idcr, $idr)
    {

        $config = config::getConnexion();
        try {

            $querry = $config->prepare('
            INSERT INTO reply 
            (idcomment,Reply_text,Date_Reply,Idreply)
            VALUES
            (:idcomment,:Reply_text,:Date_Reply,:Idreply)
            ');
            $querry->execute([
                'Idreply' => $idr,
                'Idcomment' => $idcr,
                'Reply_text' => $Reply->getReply_text(),
                'Date_Reply' => $Reply->getDate_Reply(),

            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
}
