
<?php

require_once     '../Controller/matiereC.php';
require_once     '../Controller/archivematiereC.php';
require_once '../Model/matiere.php' ;




if (isset($_GET['idmatiere'] )) 
{
    $matier = new matiereC();
        $matiereC = new archiveC();
        $matieres=$matiereC->getmatierebyID($_GET['idmatiere']);
        var_dump($matieres);
        $matiere = new matiere($matieres['idmatiere'], $matieres['titre'] , $matieres['hour'] , $matieres['coff']);
        $matier->ajoutermatiere($matiere);
        $id=$_GET['idmatiere'];
      header("Location:supprimerarchivematiere.php?idmatiere=$id");
}



?>