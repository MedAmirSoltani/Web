<?php
require '../Controller/BlogC.php';
require_once "../Model/Blog.php";

$BlogC = new BlogC();

$test = $BlogC->GetPostbyID($_GET["Idpost"]) ;
$Blog = new post($test['Title'], $test['Picture'], $test['Date'], $test['Description']);
$BlogC->AddBlogArchive($Blog);
$BlogC->RemoveBlog($_GET['Idpost']);
header('Location:AdminViewBlogHome.php');
?>