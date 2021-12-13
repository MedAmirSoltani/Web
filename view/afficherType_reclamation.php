<?php
session_start();
    require '../Controller/Type_reclamationC.php';
    include_once     '../Controller/utilisateurC.php';
    include_once '../Model/utilisateur.php';
   $userC = new utilisateurC();
    $x = $userC->getutilisateurbyID($_SESSION['a']);
    $type_reclamationC = new Type_reclamationC();
    $type_reclamations = $type_reclamationC->afficherType_reclamation();
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reclamation</title>
	<link href="../Assets/CSS/rec.css" rel="stylesheet">
    
</head>

<a href="ajouterType_reclamation.php">Ajouter Réclamation </a>

<table border='2'>
  <tr>
    <th>Id_reclamation</th>
    <th>Type_reclamation</th>
  </tr>
        <?php 
                foreach ($type_reclamations as $type_reclamation) {
        ?>


  <tr>
    <td><?php echo $type_reclamation['Id_reclamation'] ; ?></td>
    <td><?php echo $type_reclamation['Type_reclamation'] ; ?></td>
    <td><a href="supprimerType_reclamation.php?Id_reclamation=<?php echo $type_reclamation['Id_reclamation'] ; ?>"><img src="../Assets/Images/supp.png" witdh='25px' height='25px'></a></td>
    <td><a href="modifierType_reclamation.php?Id_reclamation=<?php echo $type_reclamation['Id_reclamation'] ; ?>">modifier</a></td>
  </tr>


        <?php
                }
        ?>
</table>
</html>