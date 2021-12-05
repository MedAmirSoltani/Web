<?php

    require_once '../Assets/Utils/config.php';
    require_once '../Model/cour.php';


    Class courC {

        public function afficherbyname($namerecherche)
        {
            try {
                $db = config::getConnexion();
    
                $querry = $db->prepare('select * from cour where ncour like "%'.$namerecherche.'%"');
                $querry->execute();
                $result = $querry->fetchAll();
                return $result;
            } catch (PDOException $th) {
                $th->getMessage();
            }
        }



        function getcourbymatiere($id)
        {
            $requete = "select * from cour where idmatiere=:id order by ncour";
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



        function affichercour()
        {
            $requete = "select * from cour";
         
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
        function getcourbyID($idcour)
        {
            $requete = "select * from cour where idcour=:idcour";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idcour'=>$idcour
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajoutercour($cour)
        {
            $config = config::getConnexion();   
            try {
                $querry = $config->prepare('
                INSERT INTO cour
                (idcour,ncour,file,idmatiere)
                VALUES
                (:idcour,:ncour,:file,:idmatiere)
                ');
                $querry->execute([
                    'idcour'=>$cour->getidcour(),
                    'ncour'=>$cour->getncour(),
                    'file'=>$cour->getfile(),
                    'idmatiere'=>$cour->getidmatiere(),
                ]);


            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifiercour($cour)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE cour SET
                ncour=:ncour,
                file=:file,
                idmatiere=:idmatiere
                where idcour=:idcour
                ');
                $querry->execute([
                    'idcour'=>$cour->getidcour(),
                    'ncour'=>$cour->getncour(),
                    'file'=>$cour->getfile(),
                    'idmatiere'=>$cour->getidmatiere(),

                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimercour($idcour)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM cour WHERE idcour =:idcour
                ');
                $querry->execute([
                    'idcour'=>$idcour
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }

?>