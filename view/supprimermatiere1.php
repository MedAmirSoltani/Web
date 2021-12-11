<?php
    require '../Controller/matiereC.php';

    $matiereC = new matiereC();
    $matiereC->supprimermatiere($_GET['idmatiere']);
 header('Location:frontadmin.php'); 
?>