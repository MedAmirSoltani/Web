<?php
	include '../Controller/SallesC.php';
	$SallesC = new SallesC();
	$SallesC->supprimerSalles($_GET["Id"]);
	header('Location:ListeSalles.php');
?>