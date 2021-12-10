<?php
session_start();
require_once     '../Controller/utilisateurC.php';
require_once     '../Controller/archiveC.php';
require_once '../Model/utilisateur.php' ;


        $utilisateurC = new archiveC();
        $etudiantC = new archiveC();
        $profC = new archiveC();
        $matier = new utilisateurC();
        $etudiant1C = new etudiantC();
        $prof1C = new profC();
$matieres=$utilisateurC->getarchivebyID($_GET['ID_utilisateur']);
$djapa=$etudiantC->getarchivebyID($_GET['ID_utilisateur']);
$djapa1=$profC->getarchivebyID($_GET['ID_utilisateur']);


$role=$matieres['role'];
if (isset($_GET['ID_utilisateur'] )) 
{
    if(strcmp($role,"Etudiant")==0)
    {
        
        $utilisateur = new utilisateur($matieres['ID_utilisateur'], $matieres['email'], $matieres['password'],$matieres['name'], $matieres['first_name'], $matieres['date_of_birth'], $matieres['role'],$matieres["profilpicture"]["name"]);
       $etudiant = new etudiant($djapa['ID_utilisateur'], $djapa['email'], $djapa['password'],$djapa['name'], $djapa['first_name'], $djapa['date_of_birth'], $djapa['role'],$djapa["profilpicture"]["name"],$_SESSION['special1']);


      
      $matier->ajouterutilisateur($utilisateur);
      $etudiant1C->ajouteretudiant($etudiant);
      $target_dir = "../Assets/uploads/";
      $target_file = $target_dir . basename($matieres["profilpicture"]["name"]);
      if (move_uploaded_file($matieres["profilpicture"]["tmp_name"], $target_file)) {
          echo "KHIDMET YA RJEL";
      }
        $id=$_GET['ID_utilisateur'];
        header("Location:supprimerarchive.php?ID_utilisateur=$id");
   }
   else
   {
    $utilisateur = new utilisateur($matieres['ID_utilisateur'], $matieres['email'], $matieres['password'],$matieres['name'], $matieres['first_name'], $matieres['date_of_birth'], $matieres['role'],$matieres["profilpicture"]["name"]);
    $prof = new prof($djapa1['ID_utilisateur'], $djapa1['email'], $djapa1['password'],$djapa1['name'], $djapa1['first_name'], $djapa1['date_of_birth'], $djapa1['role'],$djapa1["profilpicture"]["name"],$_SESSION['special2']);

   $matier->ajouterutilisateur($utilisateur);
   $prof1C->ajouterprof($prof);
   $target_dir = "../Assets/uploads/";
      $target_file = $target_dir . basename($matieres["profilpicture"]["name"]);
      if (move_uploaded_file($matieres["profilpicture"]["tmp_name"], $target_file)) {
          echo "KHIDMET YA RJEL";
      }
     $id=$_GET['ID_utilisateur'];
     header("Location:supprimerarchive.php?ID_utilisateur=$id");
   }
}







?>