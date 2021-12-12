<?php
include_once '../Assets/ASFO/utilis/Config.php';
include '../Controller/BlockC.php';

$BlockC = new BlockC();
$BlockC->supprimerblock($_GET["idb"]);
header('Location:AffichBlocks.php');

?>


