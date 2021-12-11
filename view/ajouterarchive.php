<?php
   require '../Controller/archiveC.php';
   require_once '../Model/utilisateur.php';
   require '../Controller/utilisateurC.php';

   $utilisateurC = new utilisateurC();
   $matier = $utilisateurC->getutilisateurbyID($_GET['ID_utilisateur']);

 if (!empty($matier))
 {
     $ID_utilisateur=$_GET['ID_utilisateur'];
    $utilisateur = new utilisateur($matier['ID_utilisateur'], $matier['email'], $matier['password'], $matier['name'], $matier['first_name'],$matier['date_of_birth'], $matier['role'],$matier["profilpicture"]["name"]);
     $archiveC=new archiveC();
     $archiveC->ajouterarchive($utilisateur);
     
 header("Location:supprimerutilisateur.php?ID_utilisateur=$ID_utilisateur");
 }


?>