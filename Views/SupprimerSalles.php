<?php
include_once '../config.php';
	include '../Controller/BlockC.php';
	$SallesC = new BlockC();
	$SallesC->supprimerSalles($_POST['id']);
	header('Location:ListeBlocks.php');
?>