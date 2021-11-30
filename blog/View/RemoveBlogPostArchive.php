<?php
require '../Controller/BlogC.php';
$BlogC = new BlogC();

$test = $BlogC->GetPostArchivebyID($_GET["Idpostar"]) ;
$BlogC->RemoveBlogArchive($_GET['Idpostar']);
header('Location:AdminViewBlogHome.php');
?>