<?php
require '../Controller/BlogC.php';
$BlogC = new BlogC();

$test = $BlogC->GetPostbyID($_GET["Idpost"]) ;
$BlogC->RemoveBlog($_GET['Idpost']);
header('Location:AdminViewBlogHome.php');
?>