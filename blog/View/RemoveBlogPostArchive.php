<?php
require '../Controller/BlogC.php';
$BlogC = new BlogC();

$blog = $BlogC->GetPostArchivebyID($_GET["Idpostar"]) ;


$BlogC->RemoveBlogArchive($_GET['Idpostar']);


header('Location:AdminViewBlogHomeArchive.php');
?>