<?php
    require '../Controller/eventC.php';

    $eventC = new eventC();
    $eventC->supprimerevent($_GET['idevent']);
    header('Location:afficherevent.php');
?>