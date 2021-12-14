<?php
   require '../Controller/archivematiereC.php';
   require_once '../Model/matiere.php';
   require '../Controller/matiereC.php';

   $matiereC = new matiereC();
   $matier = $matiereC->getmatierebyID($_GET['idmatiere']);

 if (!empty($matier))
 {
     $idmatiere=$_GET['idmatiere'];
    $matiere = new matiere($matier['idmatiere'], $matier['titre'] , $matier['hour'] , $matier['coff'] );
     $archiveC=new archiveC();
     $archiveC->ajouterarchive($matiere);
 header("Location:supprimermatiere1.php?idmatiere=$idmatiere");
 }
