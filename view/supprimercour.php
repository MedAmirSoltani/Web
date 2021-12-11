<?php
    require '../Controller/courC.php';
$id=$_GET['idmatiere'];
    $courC = new courC();
    $courC->supprimercour($_GET['idcour']);
    header("Location:affichercour.php?idmatiere=$id");
?>