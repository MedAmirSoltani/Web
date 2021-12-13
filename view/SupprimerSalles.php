<?php
include_once '../Assets/ASFO/utilis/Config.php';
	include '../Controller/BlockC.php';
	$SallesC = new BlockC();
	$SallesC->supprimerSalles($_GET['ids']);
	header('Location:ListeBlocks.php');
