<?php
    require '../Controller/CommentC.php';

    $CommentC = new CommentC();
    $CommentC->RemoveComment($_GET["Idcomment"]);
    $page=$_SERVER['HTTP_REFERER'];
    header('Location:AdminViewBlogHome.php');
?>