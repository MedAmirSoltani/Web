                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <?php

    require_once '../Assets/Utils/config.php';
    require_once '../Model/note.php';


    Class noteC {

        public function afficherbyname($namerecherche)
        {
            try {
                $db = config::getConnexion();
    
                $querry = $db->prepare('select * from note where nom like "%'.$namerecherche.'%"');
                $querry->execute();
                $result = $querry->fetchAll();
                return $result;
            } catch (PDOException $th) {
                $th->getMessage();
            }
        }

        function getnotebymatiere($id)
        {
            $requete = "select * from note where idmatiere=:id order by nom";
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



        function affichernote()
        {
            $requete = "select * from note";
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
        function getnotebyID($idnote)
        {
            $requete = "select * from note where idnote=:idnote";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idnote'=>$idnote
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouternote($note)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO note
                (idnote,nom,prenom,notes,idmatiere)
                VALUES
                (:idnote,:nom,:prenom,:notes,:idmatiere)
                ');
                $querry->execute([
                    'idnote'=>$note->getidnote(),
                    'nom'=>$note->getnom(),
                    'prenom'=>$note->getprenom(),
                    'notes'=>$note->getnotes(),
                    'idmatiere'=>$note->getidmatiere(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifiernote($note)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE note SET
                nom=:nom ,
                prenom=:prenom ,
                notes=:notes ,
                idmatiere=:idmatiere
                where idnote=:idnote
                ');
                $querry->execute([
                    'idnote'=>$note->getidnote(),
                    'nom'=>$note->getnom(),
                    'prenom'=>$note->getprenom(),
                    'notes'=>$note->getnotes(),
                    'idmatiere'=>$note->getidmatiere(),

                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimernote($idnote)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM note WHERE idnote =:idnote
                ');
                $querry->execute([
                    'idnote'=>$idnote
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }

?>