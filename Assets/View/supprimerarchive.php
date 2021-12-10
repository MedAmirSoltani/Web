<?php
    require '../Controller/archiveC.php';

    $archiveC = new archiveC();
    $archiveC->supprimerarchive($_GET['ID_utilisateur']);
    header('Location:afficherutilisateur.php');
?>