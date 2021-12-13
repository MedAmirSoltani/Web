<?php
    require '../Controller/AbsenceC.php';

    $absenceC = new AbsenceC();
    $absenceC->supprimerAbsence($_GET['Id_absence']);
    header('Location:afficherAbsence.php');
?>