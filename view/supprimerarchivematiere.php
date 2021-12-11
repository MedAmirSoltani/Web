<?php
    require '../Controller/archivematiereC.php';

    $archiveC = new archiveC();
    $archiveC->supprimerarchive($_GET['idmatiere']);
 header('Location:affichermatiere.php'); 
?>  