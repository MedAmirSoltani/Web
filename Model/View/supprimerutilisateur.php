<?php
    require '../Controller/utilisateurC.php';

    $utilisateurC = new utilisateurC();
    $utilisateurC->supprimerutilisateur($_GET['ID_utilisateur']);
    header('Location:afficherutilisateur.php');
?>