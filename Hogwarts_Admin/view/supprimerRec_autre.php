<?php
    require '../Controller/Rec_autreC.php';

    $rec_autreC = new Rec_autreC();
    $rec_autreC->supprimerRec_autre($_GET['Id_autre']);
    header('Location:afficherRec_autre.php');
?>