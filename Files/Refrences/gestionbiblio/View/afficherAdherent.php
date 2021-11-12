<?php
    require '../Controller/AdherentC.php';

    $adherentC = new AdherentC();
    $adherents = $adherentC->afficherAdherent();
?>


<html>
    <head>
</head>

<a href="ajouterAdherent.php">Ajouter Adherent </a>

<table border='2'>
  <tr>
    <th>NumAdherent</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Adresse</th>
    <th>Email</th>
    <th>Date</th>
  </tr>
        <?php 
                foreach ($adherents as $adherent) {
        ?>


  <tr>
    <td><?php echo $adherent['NumAdherent'] ; ?></td>
    <td><?php echo $adherent['Nom'] ; ?></td>
    <td><?php echo $adherent['Prenom'] ; ?></td>
    <td><?php echo $adherent['Adresse'] ; ?></td>
    <td><?php echo $adherent['Email'] ; ?></td>
    <td><?php echo $adherent['DateInscription'] ; ?></td>
    <td><a href="supprimerAdherent.php?NumAdherent=<?php echo $adherent['NumAdherent'] ; ?>"><img src="../Assets/Images/supp.png" witdh='25px' height='25px'></a></td>
    <td><a href="modifierAdherent.php?NumAdherent=<?php echo $adherent['NumAdherent'] ; ?>">modifier</a></td>
  </tr>


        <?php
                }
        ?>
</table>
</html>