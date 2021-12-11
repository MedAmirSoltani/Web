<?php
    require '../Controller/noteC.php';
   $id=$_GET['idmatiere'];
    $noteC = new noteC();
    $noteC->supprimernote($_GET['idnote']);
    header("Location:affichernote.php?idmatiere=$id");
?>