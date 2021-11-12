<?php
    require '../Controller/BlogC.php';

    $BlogC = new BlogC();
    $BlogC->supprimerBlog($_GET['Idpost']);
    header('Location:ViewBlogPost.php');
?>