<?php
    require '../Controller/BlogC.php';

    $BlogC = new BlogC();
    $BlogC->RemoveBlog($_GET['Idpost']);
    header('Location:GeneralViewBlogHome.php');
?>