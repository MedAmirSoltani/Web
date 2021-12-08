<?php
    require '../Controller/Rec_noteC.php';

    $rec_noteC = new Rec_noteC();
    $rec_noteC->supprimerRec_note($_GET['Id_note']);
    header('Location:afficherRec_note.php');
?>