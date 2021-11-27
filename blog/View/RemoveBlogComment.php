<?php
    require '../Controller/CommentC.php';

    $CommentC = new CommentC();
    $CommentC->RemoveComment($_GET["Idcomment"]);
    header('Location:AdminViewBlogHome.php');
?>