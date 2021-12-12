<?php
include_once '../Assets/ASFO/utilis/Config.php';
	include '../Controller/BlockC.php';
	$SallesC = new BlockC();
	$SallesC->supprimerSalles($_POST['id']);
	header('Location:ListeBlocks.php');
?>