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
     $target_dir = "../Assets/uploads/";
      $target_file = $target_dir . basename($matier["profilpicture"]["name"]);
      if (move_uploaded_file($matier["profilpicture"]["tmp_name"], $target_file)) {
          echo "KHIDMET YA RJEL";
      }
 header("Location:supprimerutilisateur.php?ID_utilisateur=$ID_utilisateur");
 }


?>