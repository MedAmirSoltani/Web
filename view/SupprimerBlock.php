<html>

<?php
include_once '../Assets/ASFO/utilis/Config.php';
	include '../Controller/BlockC.php';
	?>
	<h1> <?php echo "Lezmek tfasekh sea eli mawjoudin fi tab salle khater el cle primaire hedhi cle etranger fi tabl sale"; ?> </h1>
	 <?php
	$BlockC = new BlockC();
	$BlockC->supprimerblock($_GET["Id"]);
	header('Location:ListeBlocks.php');
?>


</html>