<?php

require_once "../assets/ASFO/utilis/Config.php";
    require_once '../Model/event.php';


    Class eventC {

        function afficherevent()
        {
            $requete = "select * from event";
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


        function geteventbyclub($id)
        {
            $requete = "select * from event where idclub=:id";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id'=>$id
                    ]
                );
                $result = $querry->fetchall();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function geteventbyID($idevent)
        {
            $requete = "select * from event where idevent=:idevent";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idevent'=>$idevent
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouterevent($event)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO event
                (idevent,nomevent,date,idclub)
                VALUES
                (:idevent,:nomevent,:date,:idclub)
                ');
                $querry->execute([
                    'idevent'=>$event->getidevent(),
                    'nomevent'=>$event->getnomevent(),
                    'date'=>$event->getdate(),
                    'idclub'=>$event->getidclub(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierevent($event)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE event SET
                nomevent=:nomevent,
               date=:date,
               idclub=:idclub
                where idevent=:idevent
                ');
                $querry->execute([
                    'idevent'=>$event->getidevent(),
                    'nomevent'=>$event->getnomevent(),
                    'date'=>$event->getdate(),
                    'idclub'=>$event->getidclub(),

                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerevent($idevent)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM event WHERE idevent =:idevent
                ');
                $querry->execute([
                    'idevent'=>$idevent
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }

?>