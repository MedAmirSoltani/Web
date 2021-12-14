<?php
include_once '../Assets/ASFO/utilis/Config.php';
include_once '../Model/Salles.php';
include_once'../Controller/BlockC.php';
 if(!isset($_POST['id'])||!isset($_POST['nbrprj'])||!isset($_POST['nbrtables'])||!isset($_POST['nbrchais'])||!isset($_POST['nom']))
{
	echo "erreur de ";
}


$cate=new Salles($_POST['id'],$_POST['nom'],$_POST['nbrprj'],$_POST['nbrtables'],$_POST['nbrchais'],$_POST['id_blc']);

$cat=new BlockC();
$cat->Modifiersal($cate);
header('location:http://localhost/rima/Views/ListeBlocks.php');
