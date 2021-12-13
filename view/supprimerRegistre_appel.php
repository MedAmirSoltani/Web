<?php
    require '../Controller/Registre_appelC.php';

    $registre_appelC = new Registre_appelC();
    $registre_appelC->supprimerRegistre_appel($_GET['IdRegistre']);
    header('Location:afficherRegistre_appel.php');
?>