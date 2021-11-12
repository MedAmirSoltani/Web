<?php
    require '../Controller/AdherentC.php';

    $adherentC = new AdherentC();
    $adherentC->supprimerAdherent($_GET['NumAdherent']);
    header('Location:afficherAdherent.php');
?>