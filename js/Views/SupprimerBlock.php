<?php
	include '../Controller/BlockC.php';
	$BlockC = new BlockC();
	$BlockC->supprimerblock($_GET["Id"]);
	header('Location:ListeBlocks.php');
?>